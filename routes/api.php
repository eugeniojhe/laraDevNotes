<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/ping',function(Request $request){
    return ['pong'=>true]; 
});

Route::get('/notes','noteController@index');
Route::get('/note/{id}','noteController@list');
Route::post('/note','noteController@new');
Route::put('/note/{id}','noteController@update'); 
Route::delete('note/{id}','noteController@delete');
