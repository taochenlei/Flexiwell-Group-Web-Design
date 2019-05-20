<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// homepage & welcome page
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

// use patient controller
Route::resource('patient', 'PatientController');

// doctor index page
Route::get('/user/{user_id}', 'DoctorController@index');

// doctor destory
Route::get('/doctor/{id}', 'DoctorController@destroy');

Auth::routes();

// show change password form
Route::get('/changePassword','DoctorController@showChangePasswordForm');

// change password form(post)
Route::post('/changePassword','DoctorController@changePassword')->name('changePassword');

// show the patients for selected doctor for admin
Route::get('/patientsForDoctor/{doctor_id}','DoctorController@show');

// create the patients for selected doctor for admin
Route::get('/patient/createFor/{doctor_id}','DoctorController@create');

// test
Route::get('/t', function () {
    return view('test');
});