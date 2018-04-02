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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/classes', 'Teacher\SectionsController@index');
Route::get('/home/classes/{id}', 'Teacher\SectionsController@showCourse');
Route::get('/home/classes/attendance/{id}', 'Teacher\SectionsController@showAttendance');
Route::post('/home/classes/attendance/save/{id}', 'Teacher\SectionsController@saveAttendance');
