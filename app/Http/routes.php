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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('about', 'HomeController@about');

Route::get('works', 'HomeController@works');

Route::get('contact', 'HomeController@contact');

Route::get('green', 'HomeController@green');

Route::get('donate', 'HomeController@donate');

Route::get('newsfeed', 'HomeController@newsfeed');

Route::get('showVideos/{video}', 'VideosController@show');

Route::group(['namespace' => 'Admin'], function() {

    Route::get('/admin', 'AdminController@showLogin');
});

