<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Member;
use DB;
use Session;
use Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->middleware('auth:admin');
    }
    
    public function index()
    {   
        $users = User::orderBy('id', 'desc')->paginate(10);
        $members = Member::orderBy('id', 'desc')->paginate(3);
        return view ('admin.members.index')->withUsers($users)->withMembers($members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.show')->withMember($member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view("admin.members.edit")->withMember($member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
        'firstname' => 'required|max:225',
        'surname' => 'required|max:225',
        'biblestudygroup' => 'required|max:225',
        'position' => 'required|max:225',
        'institution' => 'required|max:225',
        'hostel' => 'required|max:225',
        'print_flag' => 'required',
        'email' => 'required|email|unique:users,email,'.$id
      ]);

      $member = Member::findOrFail($id);
      $member->firstname = $request->firstname;
      $member->surname = $request->surname;
      $member->biblestudygroup = $request->biblestudygroup;
      $member->position = $request->position;
      $member->institution = $request->institution;
      $member->hostel = $request->hostel;
      $member->print_flag = $request->print_flag;
      $member->email = $request->email;

      if ($member->save()) {
        return redirect()->route('members.show', $id);
      } else {
        Session::flash('danger', 'Sorry a Problem occured while creating this user.');
        return redirect()->route('members.edit', $id);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
