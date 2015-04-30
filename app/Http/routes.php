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

Route::post('home',
    ['as' => 'contact_store', 'uses' => 'HomeController@contact']);

Route::get('green', 'HomeController@green');

Route::get('donate', 'HomeController@donate');

Route::get('newsfeed', 'HomeController@newsfeed');

Route::get('showVideos/{video}', 'VideosController@show');

Route::group(['namespace' => 'Admin'], function() {

    // GET route
    Route::get('admin', function() {
        return View::make('admin.admin');
    });
    Route::resource('edit', 'VideoController');

    Route::resource('basic/indexVideo', 'BasicVideoController');

    Route::get('editProjects', function() {
        return View::make('admin.editProjects');
    });

    Route::get('editNewsfeed', function() {
        return View::make('admin.editNewsfeed');
    });

    //POST route
    Route::post('admin', 'AdminController@login');

    Route::get('logout', array('uses' => 'AdminController@logout'));


});

Route::post('#myModal','FeedbackController@handleForm');

