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
    return view('welcome');
});

Route::get('admission', function () {
    return view('admission');
});

Route::group(['middleware' => ['viewprotect', 'preventBrowserBackButton']], function() {
	Route::get('dashboard', function () {
	    return view('dashboard');
	});
	
});

Route::group(['middleware' => ['loginrestrict', 'preventBrowserBackButton']], function() {
	Route::get('login', function () {
	    return view('login');
	});
});

//Auth::routes();

