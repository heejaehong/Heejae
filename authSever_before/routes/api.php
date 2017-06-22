<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticateController;

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


Route::post('/login', 'AuthenticateController@authenticate');
Route::post('/register', 'AuthenticateController@register');
//Route::post('/getList', 'TodolistController@getList');
//Route::post('/createList', 'TodolistController@createList');
Route::get('/getProjectList', 'ProjectController@index');

Route::middleware('jwt.auth')->get('/user', function (Request $request) {
    return $request->user();
});


