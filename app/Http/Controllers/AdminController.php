<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Member;
use DB;
use Session;
use Hash;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        $members = Member::orderBy('id', 'desc')->paginate(10000);
        return view('admin.admin')->withUsers($users)->withMembers($members);
    }

    public function profile()
    {
        return view('admin.admin-profile');
    }

    public function members()
    {
        return view('admin.admin-members');
    }

    public function backup()
    {
        return view('admin.admin-backup');
    }

    public function settings()
    {
        return view('admin.admin-settings');
    }

    public function settings2()
    {
        return view('admin.admin-settings2');
    }
}
