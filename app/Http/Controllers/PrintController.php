<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use DB;
use Session;
use Hash;


class PrintController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function printID(){
    	$members = Member::where('print_flag', '=', '0')->paginate(4);
    	return view('staff.print.index')->withMembers($members);
    }
}
