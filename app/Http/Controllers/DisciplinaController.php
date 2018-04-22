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

    public function viewCreate() {
        return view('disciplina.create');
    }

    public function create(Request $request) {
        Disciplina::create($request->all());

        return redirect('disciplina/')->with("successMessage", "Disciplina Cadastrada Com Sucesso");
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
