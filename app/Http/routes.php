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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
//Route::get('/', 'WelcomeController@index');

Route::get('/{query?}', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('home/addUser/new', 'HomeController@addUser');
Route::post('home/uploadCsv', 'HomeController@uploadCsv');
Route::post('home/insertUser', 'HomeController@insertUser');
Route::get('home/participants/new', 'HomeController@addParticipants');
Route::post('home/participants/save', 'HomeController@saveParticipants');
Route::get('home/participants/edit/{id}', 'HomeController@editParticipants');