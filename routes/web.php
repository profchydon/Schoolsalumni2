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

Route::view('' , 'index')->name('index');
Route::view('login' , 'login')->name('login');
Route::view('register' , 'register')->name('register');
Route::view('about' , 'about')->name('about');
Route::view('contact' , 'contact')->name('contact');
Route::view('projects/all' , 'Allprojects')->name('projects-all');
Route::view('search' , 'search')->name('search');
Route::view('create' , 'create')->name('create');

Route::post('/create-user-project' , 'UserController@createUserProject')->name('create-user-project');
Route::get('/dashboard' , 'UserController@dashboard')->name('dashboard');

Route::post('login' , '\App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
