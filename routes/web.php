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

Route::get('/', 'MainController@index');
Route::get('/admin', 'AdminController@index');

// programs
Route::get('/programs', 'ProgramsController@index');
Route::get('/programs/{program}', 'ProgramsController@show');
Route::get('/admin/programs', 'ProgramsController@admin_index');
Route::get('/admin/programs/create', 'ProgramsController@create');
Route::post('/admin/programs', 'ProgramsController@store');
Route::get('/admin/programs/{program}/edit', 'ProgramsController@edit');
Route::put('/admin/programs/{program}', 'ProgramsController@update');
Route::delete('/admin/programs/{program}', 'ProgramsController@destroy');

// courses
Route::get('/courses', 'CoursesController@index');
Route::get("/courses/{course}", 'CoursesController@show');
Route::get('/admin/courses', 'CoursesController@admin_index');
Route::get('/admin/courses/create', 'CoursesController@create');
Route::post('/admin/courses', 'CoursesController@store');
Route::get('/admin/courses/{course}/edit', 'CoursesController@edit');
Route::put('/admin/courses/{course}', 'CoursesController@update');
Route::delete('/admin/courses/{course}', 'CoursesController@destroy');


//Leaders
Route::get("/admin/leaders", 'LeadersController@admin_index');
Route::get("/admin/leaders/create", "LeadersController@create");
Route::post('/admin/leaders', "LeadersController@store");
Route::get("/admin/leaders/{leader}/edit", 'LeadersController@edit');
Route::put("/admin/leaders/{leader}", 'LeadersController@update');
Route::delete('/admin/leaders/{leader}', 'LeadersController@destroy');
Route::get('/home', 'HomeController@index');
Auth::routes();

// Testing Routes
Route::get('/test', function()
{
	return view('test');
});
