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

Route::get('/', function () {
    return view('students');
});

/*
| The route to the new student form.
*/
Route::get('/student', function () {
  return view('newstudent');
});

/*
| The route to the new school form.
*/
Route::get('/school', 'SchoolController@create');

/*
| The route for posting a new student data to the database.
*/
Route::post('/student', function (Request $request) {
  //
});

/*
| The route for posting a new school data to the database.
*/
Route::post('/school', 'SchoolController@store');