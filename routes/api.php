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

Route::prefix('/user')->group(function(){
    Route::post('/login', 'AuthController@login');
    Route::get('/', 'AuthController@details')->middleware('auth:api');
    Route::get('/logout', 'AuthController@logout')->middleware('auth:api');

});

Route::prefix('/articles')->group(function(){
    Route::get('/', 'ArticleController@all')->middleware('auth:api');
    Route::post('/', 'ArticleController@store')->middleware('auth:api');
});
Route::prefix('/providers')->group(function(){
    Route::get('/', 'ProviderController@all');
    

});