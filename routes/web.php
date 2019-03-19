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


//Route::get('/students', 'StudentsController@index');
//
//Route::get('/students/info/{id}', 'StudentsController@info');

Route::prefix('/students')->group(function(){

    Route::get('/', 'StudentsController@index');
    Route::get('/create', 'StudentsController@create');
    Route::post('/save', 'StudentsController@save');

    Route::get('/info/{id}', 'StudentsController@info');

});


Route::get('/courses/new', 'CoursesController@create');

Route::prefix('/courses')->group(function(){
    Route::get('/', 'CoursesController@index')->name('courses-index');
    Route::get('/create', 'CoursesController@create');
    Route::get('/update/{id}', 'CoursesController@create');
    Route::post('/save', 'CoursesController@save');
    Route::get('/info/{id}', 'CoursesController@view')->name('course-info');//rout model binding
    Route::get('/{id}/delete', 'CoursesController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
