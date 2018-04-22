<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use View;

class CursoController extends Controller
{
    public function index() {

        $cursos = Curso::all();

        return view('curso/index', [
            'cursos' => $cursos
        ]);
    }

    public function viewCreate() {
        return view('curso.create');
    }

    public function create(Request $request) {
        Curso::create($request->all());

        return redirect('/curso');
    }

    public function viewEdit($id) {
        $curso = Curso::find($id);

        return View::make('curso.edit')->with('curso', $curso);
    }

    public function edit(Request $request) {
        Curso::find($request->id)->update($request->all());

        return redirect('/curso');
    }

    public function viewDelete($id) {
        $curso = Curso::find($id);

        return View::make('curso.delete')->with('curso', $curso);
    }

    public function delete($id) {
        Curso::find($id)->delete();

        $cursos = Curso::all();

        return redirect('/curso');
    }

    public function generatePdf() {

        $cursos = Curso::all();

        dd($cursos);
    }
}
