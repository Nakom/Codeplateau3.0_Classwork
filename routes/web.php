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

Route::get('/home', 'CodeplateauController@home')->name('home');

Route::get('/create', 'CodeplateauController@create');

Route::post('/stop', 'CodeplateauController@stop');

Route::get('/showlist', 'CodeplateauController@showlist')->name('showlist');

Route::get('/name/{id}/delete', 'CodeplateauController@delete')->name('delete');

Route::get('/name/{id}/edit', 'CodeplateauController@edit')->name('edit');

Route::post('/update', 'CodeplateauController@update')->name('update');

Route::get('/register', 'UserController@register')->name('register');

Route::post('/register', 'UserController@storeuser')->name('storeuser');

Route::get('/login', 'UserController@getLogin')->name('login');

Route::post('/login', 'UserController@postLogin')->name('postLogin');

Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');





