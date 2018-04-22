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

Route::group(['prefix' => 'curso'], function () { 
    Route::get('/', 'CursoController@index');
    Route::get('/new', 'CursoController@viewCreate');
    Route::post('/create', 'CursoController@create');
    Route::get('/edit/{id}', 'CursoController@viewEdit');
    Route::post('/edit', 'CursoController@edit');
    Route::get('/delete/{id}', 'CursoController@viewDelete');
    Route::get('/destroy/{id}', 'CursoController@delete'); 
    Route::get('/pdf', 'CursoController@generatePdf');   
});

// Route::get('professor/', 'ProfessorController@index');
// Route::post('professor/', 'ProfessorController@create');
// Route::put('professor/{id}', 'ProfessorController@update');
// Route::delete('professor/{id}', 'ProfessorController@delete');

// Route::get('disciplina/', 'DisciplinaController@index');
// Route::post('disciplina/', 'DisciplinaController@create');
// Route::put('disciplina/{id}', 'DisciplinaController@update');
// Route::delete('disciplina/{id}', 'DisciplinaController@delete');

// Route::get('aluno/', 'AlunoController@index');
// Route::post('aluno/', 'AlunoController@create');
// Route::put('aluno/{id}', 'AlunoController@update');
// Route::delete('aluno/{id}', 'AlunoController@delete');

// Route::get('turma/', 'TurmaController@index');
// Route::post('turma/', 'TurmaController@create');
// Route::put('turma/{id}', 'TurmaController@update');
// Route::delete('turma/{id}', 'TurmaController@delete');
