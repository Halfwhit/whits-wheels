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

Route::get('/', 'PagesController@splash');

Route::get('/home', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/showroom', 'PagesController@showroom');

Route::get('/contact', 'PagesController@contact');


Route::resource('/projects', 'ProjectsController');


Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');


Auth::routes();

Route::get('/admin/login', 'AdminController@logout');
Route::get('/admin/logout', 'AdminController@logout');

Route::get('/test', function() {
    return view('homepage.admin');
});
