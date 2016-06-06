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


Route::any('Step2', array(
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






Route::any('welcome', array(
    'as' => 'welcome',
    'uses' => 'AdminController@admin'
));

Route::get('AdminLogin', array(
    'as' => 'AdminLogin',
    'uses' => 'AdminController@AdminLogin'
));
Route::any('AdminData', array(
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
Route::any('ViewProfile', array(
    'as' => 'ViewProfile',
    'uses' => 'AdminController@ViewProfile'
));

Route::any('UpdateProfile', array(
    'as' => 'UpdateProfile',
    'uses' => 'AdminController@UpdateProfile'
));

Route::any('TimeZone', array(
    'as' => 'TimeZone',
    'uses' => 'AdminController@TimeZone'
));

Route::get('/dataTimeZone/{data}', array(
    'as' => 'dataTimeZone',
    'uses' => 'AdminController@dataTimeZone'
));
Route::get('/dataTimeZoneDelete/{data}', array(
    'as' => 'dataTimeZoneDelete',
    'uses' => 'AdminController@dataTimeZoneDelete'
));
Route::post('/SaveRows', array(
    'as' => 'SaveRows',
    'uses' => 'AdminController@SaveRows'
));


Route::get('/ViewdataTimeZone/{data}', array(
    'as' => 'ViewdataTimeZone',
    'uses' => 'AdminController@ViewdataTimeZone'
));




Route::get('excelFormatTimeZone', [
    'as' => 'excelFormatTimeZone',
    'uses' => 'AdminController@excelFormatTimeZone'
]);
Route::get('excelFormatAdminLTE', [
    'as' => 'excelFormatAdminLTE',
    'uses' => 'AdminController@excelFormatAdminLTE'
]);
Route::get('excelFormatLogs', [
    'as' => 'excelFormatLogs',
    'uses' => 'AdminController@excelFormatLogs'
]);
Route::get('excelFormatFileUpload', [
    'as' => 'excelFormatFileUpload',
    'uses' => 'AdminController@excelFormatFileUpload'
]);

Route::get('pdfFormatTimeZone', [
    'as' => 'pdfFormatTimeZone',
    'uses' => 'AdminController@pdfFormatTimeZone'
]);
Route::get('pdfFormatAdminLTE', [
    'as' => 'pdfFormatAdminLTE',
    'uses' => 'AdminController@pdfFormatAdminLTE'
]);
Route::get('pdfFormatLogs', [
    'as' => 'pdfFormatLogs',
    'uses' => 'AdminController@pdfFormatLogs'
]);
Route::get('pdfFormatFileUpload', [
    'as' => 'pdfFormatFileUpload',
    'uses' => 'AdminController@pdfFormatFileUpload'
]);



Route::any('Logout', array(
    'as' => 'Logout',
    'uses' => 'AdminController@Logout'
));



Route::get('facebook', array(
    'as' => 'facebook',
    'uses' => 'AdminController@redirectToProvider'
));
Route::any('callback', array(
    'as' => 'callback',
    'uses' => 'AdminController@handleProviderCallback'
));

Route::get('LinkedIn', array(
    'as' => 'linkedin',
    'uses' => 'AdminController@redirectToLinkedIn'
));
Route::any('linkedin/callback', array(
    'as' => 'linkedin/callback',
    'uses' => 'AdminController@LinkedInCallback'
));
Route::get('Google', array(
    'as' => 'google',
    'uses' => 'AdminController@redirectToGoogle'
));
Route::any('google/callback', array(
    'as' => 'google/callback',
    'uses' => 'AdminController@googleCallback'
));




Route::any('testdatatable', array(
    'as' => 'testdatatable',
    'uses' => 'AdminController@testdatatable'
));
Route::get('ajaxcall', array(
    'as' => 'ajaxcall',
    'uses' => 'AdminController@ajaxcall'
));

Route::get('countries', array(
    'as' => 'countries',
    'uses' => 'AdminController@countries'
));
Route::get('State', array(
    'as' => 'State',
    'uses' => 'AdminController@State'
));
Route::get('City', array(
    'as' => 'City',
    'uses' => 'AdminController@City'
));
Route::get('Continents', array(
    'as' => 'Continents',
    'uses' => 'AdminController@Continents'
));

Route::get('polymorphic', array(
    'as' => 'polymorphic',
    'uses' => 'AdminController@polymorphic'
));






