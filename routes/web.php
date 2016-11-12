<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function() {
  return redirect()->route('registry');
});

/*
* The route to the registry page, which takes an optional school ID parameter for sidebar navigation
*/
Route::get('/registry/{id?}', 'RegistryController@show')->name('registry');

/*
| The route to the new student form.
*/
Route::get('/student', 'StudentController@create');


/*
| The route to the new school form.
*/
Route::get('/school', 'SchoolController@create');

/*
| The route for posting a new student to the database.
*/
Route::post('/student', 'StudentController@store');

/*
| The route for posting a new school to the database.
*/
Route::post('/school', 'SchoolController@store');