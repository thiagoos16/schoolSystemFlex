<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Professor;
use App\Disciplina;

class TurmaController extends Controller
{
    public function index() {
        $turmas = Turma::all();
       
        return view('turma/index', [
            'turmas' => $turmas
        ]);
    }

    public function viewCreate() {
        $professores = Professor::all();
        $disciplinas = Disciplina::all();

        return view('turma/create', [
            'professores' => $professores,
            'disciplinas' => $disciplinas
        ]);
    }

    public function create(Request $request) {
        try {
            Turma::create($request->all());
            return redirect('/turma')->with("successMessage", "Turma Cadastrada Com Sucesso");
        } catch (Exception $e) {
            return redirect('/turma')->with("errorMessage", "Não foi possível Cadastrar a Turma. Preencha todos os campos.");
        }
    }

    public function update(Request $request, $id) {
        Turma::find($id)->update($request->all());

        return $request->all();
    }

    public function delete($id) {
        Turma::find($id)->delete();

        return Turma::all();
    }
}
