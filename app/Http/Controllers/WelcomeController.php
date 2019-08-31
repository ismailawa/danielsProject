<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use DB;
use Session;
use Hash;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $settings = Setting::orderBy('id', 'desc')->paginate(2);
        return view('welcome')->withSettings($settings);
    }


}
