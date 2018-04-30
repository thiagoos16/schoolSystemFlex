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
    Route::get('/turmas/{id}', 'CursoController@viewTurmas'); 
    Route::post('/createTurmaCurso', 'CursoController@createTurmaCurso');   
});

Route::group(['prefix' => 'professor'], function () { 
    Route::get('/', 'ProfessorController@index');
    Route::get('/new', 'ProfessorController@viewCreate');
    Route::post('/create', 'ProfessorController@create');
    Route::get('/edit/{id}', 'ProfessorController@viewEdit');
    Route::post('/edit', 'ProfessorController@edit');
    Route::get('/delete/{id}', 'ProfessorController@viewDelete');
    Route::get('/destroy/{id}', 'ProfessorController@delete'); 
    Route::get('/pdf', 'ProfessorController@generatePdf');   
});

Route::group(['prefix' => 'disciplina'], function () { 
    Route::get('/', 'DisciplinaController@index');
    Route::get('/new', 'DisciplinaController@viewCreate');
    Route::post('/create', 'DisciplinaController@create');
    Route::get('/edit/{id}', 'DisciplinaController@viewEdit');
    Route::post('/edit', 'DisciplinaController@edit');
    Route::get('/delete/{id}', 'DisciplinaController@viewDelete');
    Route::get('/destroy/{id}', 'DisciplinaController@delete'); 
    Route::get('/pdf', 'DisciplinaController@generatePdf');   
});

Route::group(['prefix' => 'aluno'], function () { 
    Route::get('/', 'AlunoController@index');
    Route::get('/new', 'AlunoController@viewCreate');
    Route::post('/create', 'AlunoController@create');
    Route::get('/edit/{id}', 'AlunoController@viewEdit');
    Route::post('/edit', 'AlunoController@edit');
    Route::get('/delete/{id}', 'AlunoController@viewDelete');
    Route::get('/destroy/{id}', 'AlunoController@delete'); 
    Route::get('/pdf', 'AlunoController@generatePdf');  
    Route::get('/turmas/{id}', 'AlunoController@viewTurmas');
    Route::post('/createTurmaAluno', 'AlunoController@createTurmaAluno'); 
    Route::get('/deleteTurmaAluno/{aluno_id}/{turma_id}', 'AlunoController@deleteTurmaAluno');
});

Route::group(['prefix' => 'turma'], function () { 
    Route::get('/', 'TurmaController@index');
    Route::get('/new', 'TurmaController@viewCreate');
    Route::post('/create', 'TurmaController@create'); 
});