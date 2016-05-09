<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@index');
Route::get('/greet/{name}', 'PageController@greet');

Route::get('/getWeather/{location}', 'WeatherController@getWeather');

Route::resource('location', 'LocationController', ['names' => [
    'index' => 'locations'
]]);

Route::get('/tags', ['uses' => 'StoryController@tags', 'as' => 'tags']);
Route::get('/api/stories', ['uses' => 'StoryController@api_stories', 'as' => 'stories']);
Route::post('/story/store', ['uses' => 'StoryController@store', 'as' => 'store']);
Route::resource('story', 'StoryController', ['names' => [
    'index' => 'stories'
]]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

