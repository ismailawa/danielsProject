<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StaffLoginController extends Controller
{

	public function __construct()
	{
		 $this->middleware('guest:staff');
	}

     public function showLoginForm()
    {
    	return view('auth.staff-login');
    }

    public function login(Request $request)
    {
    	//validate the form date
    	$this->validate($request, [
    		'email'	=> 'required|email',
    		'password'	=>	'required|min:6'
    	]);

    	//attempt to log the user in
    	if (Auth::guard('staff')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		//if successful, redirect to the intended page
    		return redirect()->intended(route('staff.dashboard'));
    	}
    	
    	//if unsuccessful, redirect back to the login page with form data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
