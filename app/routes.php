<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as'=>'new_code','uses'=>'OpenCodeController@getNew'));
Route::get('new', array('as'=>'new_code','uses'=>'OpenCodeController@getNew'));
Route::get('/info', array('as'=>'show_info','uses'=>'OpenCodeController@getInfo'));
Route::get('/{id}/', array('as'=>'show_code','uses'=>'OpenCodeController@getShow'));
Route::get('/{id}/fork', array('as'=>'fork_code','uses'=>'OpenCodeController@getFork'));
Route::post('/', array('as'=>'save_code','uses'=>'OpenCodeController@postCreate'));