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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/users', 'UsersController@users')->name('users');
Route::get('/feestructure', 'FeeStructureController@feestructure')->name('feestructure');
Route::get('/sessionreporting', 'SessionReportingController@sessionreporting')->name('sessionreporting');
Route::get('/admission', 'AdmissionController@admission')->name('admission');
Route::post('/contact', 'ContactController@store');
