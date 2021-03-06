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
Route::resource('api/v1/users', 'UserController');
Route::resource('api/v1/medications', 'MedicationController');
Route::resource('api/v1/appointments', 'AppointmentController');
Route::resource('api/v1/contacts', 'ContactController');
Route::resource('api/v1/notifications', 'NotificationController');
Route::resource('api/v1/medicationlist', 'MedicationListController');

/* User Controller */
Route::get('api/v1/users/{id}/notifcations', 'UserController@getNotifications');
Route::get('api/v1/users/{id}/generate-notifications', 'UserController@generateNotifications');
Route::get('api/v1/users/{id}/appointments', 'UserController@getAppointments');
Route::get('api/v1/users/{id}/medications', 'UserController@getMedications');

/* Home Controller */
Route::get('/', 'HomeController@getIndex');
Route::get('logout', 'HomeController@getLogout');
Route::get('userinfo', 'HomeController@getUserInfo');

/* Auth Controller */
Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('register', 'AuthController@getRegister');
Route::post('register', 'AuthController@postRegister');
