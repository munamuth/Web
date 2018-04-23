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

Route::get('/', function () {
    return view('layout');
});

Route::get('/academic', function () {
    return view('pages.academic');
});


Route::group(['middleware' => ['web']], function () {
    Route::get('/admin', function () {
	    return view('admin');
	});
	Route::get('/admin/property', "PropertyController@index");
	Route::post('/admin/property', "PropertyController@store");


	Route::get('/admin/academics', "AcademicController@index");
	Route::post('/admin/academic/post', "AcademicController@store");
	Route::get('/admin/why_us', "AboutUsController@index");
});
