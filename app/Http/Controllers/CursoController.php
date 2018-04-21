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
        
        return $request->all();
    }

    public function findById($id) {
        $curso = Curso::find($id);

        return view('curso/form', [
            'curso' => $curso
        ]);
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
