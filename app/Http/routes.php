<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

Route::get('search', 'SearchController@index');
Route::get('do', 'SearchController@searchDo');
Route::get('go', 'SearchController@searchGo');
Route::get('know', 'SearchController@searchKnow');
Route::get('social', 'SearchController@searchSocial');

Route::get('results', 'UsersController@results');