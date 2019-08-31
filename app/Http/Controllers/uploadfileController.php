<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadfileController extends Controller
{
    function index()
    {
    	return view('settings.upload');
    }
}
