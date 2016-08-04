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

Route::get('/', function () {
    return view('lol.index');
});

// Team registration page
Route::post('/team/register', 'TeamController@register');
Route::get('/team/register', 'TeamController@formPage');