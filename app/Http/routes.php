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
    return view('welcome');
});


Route::get('Step1', array(
    'as' => 'register',
    'uses' => 'AdminController@register'
));
Route::post('registersubmit', array(
    'as' => 'registersubmit',
    'uses' => 'AdminController@registersubmit'
));


Route::post('Step2', array(
    'as' => 'login',
    'uses' => 'AdminController@login'
));
Route::post('loginsubmit', array(
    'as' => 'loginsubmit',
    'uses' => 'AdminController@loginsubmit'
));

Route::get('getpassword', array(
    'as' => 'forgotpassword',
    'uses' => 'AdminController@getpassword'
));

Route::post('welcome', array(
    'as' => 'welcome',
    'uses' => 'AdminController@admin'
));

Route::get('AdminLogin', 'AdminController@AdminLogin');
Route::post('AdminData', array(
    'as' => 'AdminData',
    'uses' => 'AdminController@AdminData'
));

Route::get('test', array(
    'as' => 'test',
    'uses' => 'AdminController@test'
));



