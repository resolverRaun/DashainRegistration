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

Route::get('/home', array('as' => 'participant', 'uses' => 'HomeController@index'));

Route::get('home/addUser/new', 'HomeController@addUser');
Route::post('home/uploadCsv', 'HomeController@uploadCsv');
Route::post('home/insertUser', 'HomeController@insertUser');

Route::get('home/participants/new', 'HomeController@addParticipants');
Route::get('/',array('as' => 'home', 'uses' => 'HomeController@addParticipants'));
Route::get('home/participants/edit/{id}', 'HomeController@editParticipants');
Route::post('home/participants/save', 'HomeController@saveParticipants');
Route::post('home/participants/update/{id}', 'HomeController@updateParticipants');
Route::get('home/participants/delete/{id}', array('as' => 'deleteParticipant', 'uses' => 'HomeController@deleteParticipants'));

Route::get('home/viewPeople',array('as' => 'people', 'uses' => 'HomeController@viewPeople'));
Route::get('search/autocomplete/{term?} ', 'HomeController@autocomplete');

Route::get('home/inventory/new', 'HomeController@addInventory');
Route::post('home/inventory/save', 'HomeController@saveInventory');
Route::get('home/inventory',array('as' => 'inventory', 'uses' => 'HomeController@getInventory'));

Route::get('home/miscellaneous',array('as' => 'miscellaneous', 'uses' => 'HomeController@getMiscellaneous'));
Route::post('home/miscellaneous/save', 'HomeController@updateMiscellaneous');
