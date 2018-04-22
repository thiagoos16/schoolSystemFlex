<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{
    public function index() {
        $disciplinas = Disciplina::all();

        return view('disciplina/index', [
            'disciplinas' => $disciplinas
        ]);
    }

    public function create(Request $request) {
        Disciplina::create($request->all());
        
        return $request->all();
    }

    public function update(Request $request, $id) {
        Disciplina::find($id)->update($request->all());

        return $request->all();
    }

    public function delete($id) {
        Disciplina::find($id)->delete();

        return Disciplina::all();
    }
}
