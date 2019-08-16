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

Route::middleware('auth:api')->get('/limitefighter/v1/faixas/{id?}','FaixaController@index');
Route::post('/limitefighter/v1/signin','UserController@signin');

Route::post('/signup', 'AuthController@signup');

Route::post('/signin', 'AuthController@signin');
Route::post('/signout', 'AuthController@signout');