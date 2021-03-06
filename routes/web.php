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

Route::group(['middleware' => 'auth'], function () {
    Route::view('profile' , 'pages.profile')->name('profile');
    Route::view('create_loggedin' , 'pages.create_loggedin')->name('create_loggedin');
    Route::post('create-user-project-loggedin' , 'UserController@createUserProjectLoggedIn')->name('create-user-project-loggedin');
    Route::get('dashboard' , 'UserController@dashboard')->name('dashboard');
});

Route::view('' , 'pages.index')->name('index');
Route::view('login' , 'pages.login')->name('login');
Route::view('register' , 'pages.register')->name('register');
Route::view('about' , 'pages.about')->name('about');
Route::view('contact' , 'pages.contact')->name('contact');
Route::view('create' , 'pages.create')->name('create');

Route::get('school/{school}/projects' , 'ProjectController@getSchoolProjects')->name('school-projects');
Route::get('search' , 'ProjectController@getSchool')->name('search');
Route::get('projects/all' , 'ProjectController@all')->name('all-projects');
Route::get('projects/project/{id}' , 'ProjectController@getAproject');
Route::get('projects/sort' , 'ProjectController@sort');
Route::get('projects/ongoing-projects' , 'ProjectController@ongoingProjects')->name('ongoing-projects');
Route::get('projects/completed-projects' , 'ProjectController@completedProjects')->name('completed-projects');
Route::get('project/funding/{id}' , 'ProjectController@getProjectForFunding')->name('fund-projects');
Route::get('project/complete/{id}' , 'ProjectController@completeProject');
Route::post('project/funding/success' , 'ProjectController@saveFundingTransactionDetails');

Route::view('imageupload','pages.imageupload');
Route::post('image-view','ProjectController@uploadImage');
Route::post('/create-user-project' , 'UserController@createUserProject')->name('create-user-project');
Route::post('login' , '\App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
