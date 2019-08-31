<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salutation;
use App\Biblestudygroup;
use App\Zone;
use App\Position;
use App\Hostel;
use App\Institution;
use App\Member;
use Crypt;
use Auth;
use DB;
use Session;
use Hash;
use Validator;
use Response;
class AccountController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getCreate(){
    	$salutations = Salutation::orderBy('id', 'asc')->paginate(20);
    	$biblestudygroups = Biblestudygroup::orderBy('id', 'asc')->paginate(20);
    	$zones = Zone::orderBy('id', 'asc')->paginate(10);
    	$positions = Position::orderBy('id', 'asc')->paginate(50);
    	$hostels = Hostel::orderBy('id', 'asc')->paginate(20);
    	$institutions = Institution::orderBy('id', 'asc')->paginate(300);
    	return view('staff.account.create')->withSalutations($salutations)->withBiblestudygroups($biblestudygroups)->withZones($zones)->withPositions($positions)->withHostels($hostels)->withInstitutions($institutions);
    }

    public function postCreate(Request $request){
		$resp = array('code' => '900', 'status' => 'fail');

		$validate = Validator::make($request->all(),
			array(
					'email' => 'required|email|max:60|unique:members',
					'salutation' => 'required',
					'surname' => 'required',
					'firstname' => 'required',
					'initials' => 'required',
					'gender' => 'required',
					'dob' => 'required',
					'mobile' => 'required',
				)
			);
		if ( $validate->fails() ) {
			$msg = '';
			$errors = $validate->messages()->all();
			foreach ($errors as $key => $value) {
				$msg .= $value.'<br>';
			}
			$resp['message'] = $msg.'<hr>';
			return Response::json( $resp );
		} else {
			// Input::merge(array('author_id' => Auth::user()->id));
			// $member = Member::create(Input::all());

			$member = new Member();
			$member->salutation = $request->salutation;
			$member->surname = $request->surname;
			$member->firstname = $request->firstname;
			$member->othername = $request->othername;
			$member->initials = $request->initials;
			$member->gender = $request->gender;
			$member->dob = $request->dob;
			$member->institution = $request->institution;
			$member->zone = $request->zone;
			$member->position = $request->position;
			$member->hostel = $request->hostel;
			$member->biblestudygroup = $request->biblestudygroup;
			$member->mobile = $request->mobile;
			$member->email = $request->email;
			$member->author_id = Auth::user()->id;

			if( $member->save() ) {
				$resp['code'] = 200; // $request->surname
				$resp['message'] = 'Registration for '. '<strong>'.$request->surname.'</strong>'.' '. '<strong>'.$request->firstname.'</strong>'.' '.' was successful.' .'<br>'.'ID card can be printed out.';
				return Response::json( $resp );
			} else {
				$resp['message'] = 'Something went wrong, please try again.';
				return Response::json( $resp );
			}
		}
	}

	# Account Print Update @ Post
	public function postUpdatePrint(Request $request){
		//dd($request->all());
		$resp = array('code' => '900', 'status' => 'fail');

		$successful = 0;
		foreach ($request->all() as $key => $value) {
			if ( $key != "_token" ) {
				$rid = Crypt::decrypt($value);
				$member = Member::find($rid);
				//dd($member);
				$member->print_flag = 1;
				if ( $member->update() ) { $successful++; }
			}
		}

		if( $successful ) {
			$resp['code'] = 200;
			$resp['status'] = 'success';
			$resp['message'] = 'success';
			return Response::json( $resp );
		} else {
			$resp['status'] = 'fail';
			$resp['message'] = 'Something went wrong, please try again.';
			return Response::json( $resp );
		}
	}

}
