<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Curso;

class AlunoController extends Controller
{
    public function index() {
        $alunos_aux = Aluno::all();
        $alunos = [];
        
        foreach ($alunos_aux as $aluno) {
            $curso = $aluno->curso()->where('id', $aluno->id_curso)->first();
            
            $tempAluno = $aluno;
            $tempAluno['curso'] = $curso->nome;

            $alunos[] = $tempAluno;
        }

        return view('aluno/index', [
            'alunos' => $alunos
        ]);
    }

    public function viewCreate() {
        $cursos = Curso::all();

        return view('aluno.create', [
            'cursos' => $cursos
        ]);
    }

    public function create(Request $request) {
        Aluno::create($request->all());

        return redirect('aluno/')->with("successMessage", "Aluno Cadastrado Com Sucesso");
    }

    public function update(Request $request, $id) {
        Aluno::find($id)->update($request->all());

        return $request->all();
    }

    public function delete($id) {
        Aluno::find($id)->delete();

        return Aluno::all();
    }
}
