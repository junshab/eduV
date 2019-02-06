<?php

//use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();
});*/

Route::post('login', 'AuthController@login')->name('login');
Route::post('register', 'AuthController@register')->name('register');
Route::post('logout', 'AuthController@logout')->name('logout');

Route::middleware('auth:api')->group(function () {
    Route::get('me', 'AuthController@me');
    
    //students route
    Route::post('/studentadd', 'studentController@create');
    Route::get('/studentdata', 'studentController@get');
	Route::get('/studentdata/{id}', 'studentController@getbyid');
	Route::put('/studentupdate/{id}', 'studentController@update');
	Route::delete('/studentdelete/{id}', 'studentController@delete');

	//institution route
	Route::post('/institutionadd', 'institutionRegisterController@create');
	Route::post('/institutionverify/{phone}', 'institutionRegisterController@verify');

});









