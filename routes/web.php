<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('admin', 'Users\Admin\AdminController@index')->name('dashboard');

// Admin routes
Route::prefix('admin')->name('admin.')->namespace('Auth')->group(function () {
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminLoginController@login')->name('login.submit');
    Route::get('/register', 'AdminRegisterController@showRegisterForm')->name('register');
    Route::post('/register', 'AdminRegisterController@register')->name('register.submit');
});



Route::get('doctor', 'Users\Doctor\DoctorController@index')->name('dashboard');

// Doctor routes
Route::prefix('doctor')->name('doctor.')->namespace('Auth')->group(function () {
    Route::get('/login', 'DoctorLoginController@showLoginForm')->name('login');
    Route::post('/login', 'DoctorLoginController@login')->name('login.submit');
    Route::get('/register', 'DoctorRegisterController@showRegisterForm')->name('register');
    Route::post('/register', 'DoctorRegisterController@register')->name('register.submit');
});
