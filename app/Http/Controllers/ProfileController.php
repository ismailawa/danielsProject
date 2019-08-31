<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;
use Session;
use Hash;

class ProfileController extends Controller
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
        $profiles = Admin::orderBy('id', 'desc')->paginate(2);
        return view('admin.profiles.index')->withAdmins($profiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profiles.create');
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
        $profile = Admin::findOrFail($id);
        return view('admin.profiles.show')->withAdmin($profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       $profile = Admin::findOrFail($id);
      return view("admin.profiles.edit")->withAdmin($profile);
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
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            
        ]);

        Admin::find($id)->update($request->all());

        return redirect()->route('profiles.index')
                        ->with('success','profiles updated successfully');
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