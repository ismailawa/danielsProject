<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/test', function () {
    return view('test');
});
Route::get('/test2', function () {
    return view('test2');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/account', 'AccountController@getCreate')->name('staff.create');
Route::get('/print', 'PrintController@printID')->name('staff.print');
Route::post('/account', 'AccountController@postCreate')->name('staff.create-post');
Route::post('/print', 'AccountController@postUpdatePrint')->name('staff.print-post');

Route::post('/print', 'AccountController@postUpdatePrint')->name('staff.print-post');



Route::prefix('staff')->group(function() {


});

	Route::prefix('admin')->group(function() {

		Route::get('/profile', 'AdminController@profile')->name('admin.profile');
		Route::get('/members', 'AdminController@members')->name('admin.members');
		Route::get('/backup', 'AdminController@backup')->name('admin.backup');
		Route::get('/app settings', 'AdminController@settings')->name('admin.settings');
		Route::get('/app settings2', 'AdminController@settings2')->name('admin.settings2');
		Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
		Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

		Route::get('/upload', 'uploadController@index')->name('admin.upload');
		Route::post('/store', 'uploadController@store')->name('admin.upload.submit');
		Route::get('/show', 'uploadController@show')->name('admin.upload.show');

		Route::get('/', 'AdminController@index')->name('admin.dashboard');



		

		Route::resource('/members', 'MemberController');
		Route::resource('/settings', 'SettingsController');
		Route::resource('/profile', 'AdminprofileController');
		Route::resource('/hostels', 'HostelController');
		Route::resource('/institutions', 'InstitutionController');
		Route::resource('/positions', 'PositionController');
		Route::resource('/biblestudy', 'BiblestudyController');
		Route::resource('/logo', 'LogoController');


	});


