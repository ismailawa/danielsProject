<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Logo;
use DB;
use Session;
use Hash;

class SettingsController extends Controller
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
        $settings = Setting::orderBy('id', 'desc')->paginate(2);
        return view('admin.settings.index')->withSettings($settings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'logoname' => 'required'
        ]);
        $logo = new Logo([
            'logoname' => $request->get('logoname')
        ]);
        $logo->save();
        return redirect()->route('settings.index')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.show')->withSetting($setting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       $setting = Setting::findOrFail($id);
      return view("admin.settings.edit")->withSetting($setting);
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
            'appname' => 'required',
            'hostinstitution' => 'required',
            'apptheme' => 'required',
            'appmotto' => 'required',
            'aboutapp' => 'required',
            
        ]);

        Setting::find($id)->update($request->all());

        return redirect()->route('settings.index')
                        ->with('success','Settings updated successfully');
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
