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

Route::delete('/users/delete',function(){
    return 'delete user';
});

Route::post('/users/save',function(){
    return 'save user';
});

Route::get('/users',function(){
    return 'users';
});

Route::get('/users/{id}',function(){
    return 'user';
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
