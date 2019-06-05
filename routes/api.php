<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('contacts', 'ApiContactController');
/* Route::get('/contacts', 'ApiContactController@index'); */
/* Route::get('/contacts/{id}', 'ApiContactController@show'); */
/* Route::post('/contacts', 'ApiContactController@store'); */
/* Route::put('/contacts/{id}', 'ApiContactController@update'); */
/* Route::delete('/contacts/{id}', 'ApiContactController@destroy'); */
