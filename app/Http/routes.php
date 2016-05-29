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

Route::get('forgotpassword', array(
    'as' => 'forgotpassword',
    'uses' => 'AdminController@forgotpassword'
));
Route::post('sendpassword', array(
    'as' => 'sentpassword',
    'uses' => 'AdminController@sentpassword'
));






Route::post('welcome', array(
    'as' => 'welcome',
    'uses' => 'AdminController@admin'
));

Route::get('AdminLogin', array(
    'as' => 'AdminLogin',
    'uses' => 'AdminController@AdminLogin'
));
Route::post('AdminData', array(
    'as' => 'AdminData',
    'uses' => 'AdminController@AdminData'
));

Route::get('test', array(
    'as' => 'test',
    'uses' => 'AdminController@test'
));

Route::any('FIleUpload', array(
    'as' => 'uploadfile',
    'uses' => 'AdminController@FileUpload'
));
Route::post('progress', array(
    'as' => 'progress',
    'uses' => 'AdminController@ProgressBar'
));

Route::any('DataTable', array(
    'as' => 'datatable',
    'uses' => 'AdminController@DataTablepage'
));



Route::get('ChangePassword', array(
    'as' => 'ChangePassword',
    'uses' => 'AdminController@ChangePassword'
));

Route::post('UpdatePassword', array(
    'as' => 'UpdatePassword',
    'uses' => 'AdminController@UpdatePassword'
));
Route::any('Profile', array(
    'as' => 'Profile',
    'uses' => 'AdminController@Profile'
));


Route::any('UpdateProfile', array(
    'as' => 'UpdateProfile',
    'uses' => 'AdminController@UpdateProfile'
));

Route::any('TimeZone', array(
    'as' => 'TimeZone',
    'uses' => 'AdminController@get_timezone_offset'
));








Route::get('Logout', array(
    'as' => 'Logout',
    'uses' => 'AdminController@Logout'
));





