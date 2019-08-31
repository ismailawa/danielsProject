<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
	public function __construct()
    {

        $this->middleware('auth:admin');
    }

    public function index()
    {
    	return view('admin.upload.upload');
    }

    public function store(Request $request)
    {
    	 
    	 if ($request->hasFile('logoname')) {
    	 	$request->file('logoname');
    	 	// return $request->logoname->extension();
    	 	return $request->logoname->storeAs('public', 'Hostlogo.jpg');
    	 	// return Storage::putFile('public/new', $request->file('logoname'));
    	 }else{
    	 	return "No file selected";
    	 }
    	
    }

    public function show()
    {	
    	if (Storage::move('public/Hostlogo.jpg', 'Hostlogo.jpg')){
    		return "file moved";
    	}
    }
}

