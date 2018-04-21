<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index() {

        $cursos = Curso::all();

        return view('curso/index', [
            'cursos' => $cursos
        ]);
    }

    public function create(Request $request) {
        Curso::create($request->all());

        $cursos = Curso::all();

        return view('curso/index', [
            'successMessage' => 'Curso Cadastrado com Sucesso!!',
            'cursos' => $cursos
        ]);
    }

    public function form() {
        return view('curso/form');
    }

    public function findById($id) {
        $curso = Curso::find($id);

        return \View::make('curso.form')->with('curso', $curso);
    }

    public function update(Request $request, $id) {
        Curso::find($id)->update($request->all());

        return $request->all();
    }

    public function delete($id) {
        Curso::find($id)->delete();

        return Curso::all();
    }
}
