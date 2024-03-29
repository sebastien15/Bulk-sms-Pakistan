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
    return view('index');
});
Route::get('/','indexController@index')->name('index');

Route::get('/easy','indexController@easyAddNumber')->name('easy');

Route::get('/mailBox','indexController@mailBox')->name('mailbox');

Route::get('/smsToAdmins','indexController@smsToAdmins')->name('smsToAdmins');

Route::resource('city','cityController');
Route::resource('number','numberController');
Route::resource('message','messageController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
