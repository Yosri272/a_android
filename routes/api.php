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
Route::get('Api','Api\displayController@index');
Route::get('Api1','Api\displayController@index1');
Route::get('Api2','Api\displayController@index2');

//////////////////////api////////

////////////display//////////
Route::get('d_Api','Api\crudController@index');
//////////sort///////
Route::get('s_Api','Api\crudController@store');
////////////show/////
Route::get('sh_Api','Api\crudController@show');

////////////edit////

Route::get('e_Api','Api\crudController@edit');

//////////////////update////
Route::get('u_Api','Api\crudController@update');



///////////delete///

Route::get('d_Api','Api\crudController@destroy');
