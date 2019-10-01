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

Route::resource('/projects', 'ProjectsController');
Route::patch('/projects/{{$project->id}}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/completed-task/{task}', 'completedTaskController@store');
Route::delete('/completed-task/{task}', 'completedTaskController@destroy');
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edite', "Projectscontroller@edite");
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', "ProjectsController@delete");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
