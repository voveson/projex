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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/get-all-tasks', 'ApiController@getAllTasks');
Route::post('/update-tasks', 'ApiController@updateTasks');
Route::post('/post-comment', 'ApiController@postComment');
Route::post('/update-assignee', 'ApiController@update_assignee');
