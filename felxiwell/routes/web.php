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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('patient', 'PatientController');
Route::get('/user/{user_id}', 'DoctorController@index');
Route::get('/doctor/{id}', 'DoctorController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/changepassword/{doctor_id}', function () {
//     return view('auth.passwords.change');
// });

// Route::post('/changepassword', 'DoctorController@changePassword');

Route::get('/changePassword','DoctorController@showChangePasswordForm');
Route::post('/changePassword','DoctorController@changePassword')->name('changePassword');
Route::get('/patientsForDoctor/{doctor_id}','DoctorController@show');
Route::get('/patient/createFor/{doctor_id}','DoctorController@create');





Route::get('/password_resets', function () {
    return view('auth.passwords.reset');
});

Route::get('/2', function () {
    return view('patient.index');
});

/*
// Resource Controllers
Route::resource('product', 'ProductController');
Route::resource('review', 'ReviewController');
Route::resource('photo', 'PhotoController');
Route::resource('vote', 'VoteController');
Route::resource('follow', 'FollowController');


// welcome page
Route::get('/', function () {
    return view('welcome');
});

// documentation page
Route::get('/documentation', function () {
    return view('documentation');
});

// Some other controllers for new review; order by date and rate; user's home page
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product/{product_id}/newreview', 'ReviewController@create');
Route::get('/product/{product_id}/bydate', 'ProductController@bydate');
Route::get('/product/{product_id}/byrate', 'ProductController@byrate');
Route::get('/user/review/{user_id}', 'ReviewController@index');

// testing things
Route::get('/1', function () {
    return view('bootstrap.1');
});
Route::get('/t', function () {
    return view('test');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
