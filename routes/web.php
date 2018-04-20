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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('curso/', 'CursoController@index');
Route::post('curso/', 'CursoController@create');
Route::put('curso/{id}', 'CursoController@update');
Route::delete('curso/{id}', 'CursoController@delete');

Route::get('professor/', 'ProfessorController@index');
Route::post('professor/', 'ProfessorController@create');
Route::put('professor/{id}', 'ProfessorController@update');
Route::delete('professor/{id}', 'ProfessorController@delete');
