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

Route::get('/', [
    'as' => 'index',
    'uses' => 'Controller@index'
]);

Route::get('curso/', [
    'as' => 'curso.index',
    'uses' => 'CursoController@index'
]);
Route::post('curso/', [
    'as' => 'curso.create',
    'uses' => 'CursoController@create'
]);
Route::put('curso/{id}', [
    'as' => 'curso.update',
    'uses' => 'CursoController@update'
]);
Route::delete('curso/{id}', [
    'as' => 'curso.delete',
    'uses' => 'CursoController@delete'
)];

Route::get('professor/', 'ProfessorController@index');
Route::post('professor/', 'ProfessorController@create');
Route::put('professor/{id}', 'ProfessorController@update');
Route::delete('professor/{id}', 'ProfessorController@delete');

Route::get('disciplina/', 'DisciplinaController@index');
Route::post('disciplina/', 'DisciplinaController@create');
Route::put('disciplina/{id}', 'DisciplinaController@update');
Route::delete('disciplina/{id}', 'DisciplinaController@delete');

Route::get('aluno/', 'AlunoController@index');
Route::post('aluno/', 'AlunoController@create');
Route::put('aluno/{id}', 'AlunoController@update');
Route::delete('aluno/{id}', 'AlunoController@delete');

Route::get('turma/', 'TurmaController@index');
Route::post('turma/', 'TurmaController@create');
Route::put('turma/{id}', 'TurmaController@update');
Route::delete('turma/{id}', 'TurmaController@delete');
