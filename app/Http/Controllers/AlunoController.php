<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Curso;
use View;
use PDF;
use Exception;

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
        try {
            Aluno::create($request->all());
            return redirect('/aluno')->with("successMessage", "Aluno Cadastrado Com Sucesso");
        } catch (Exception $e) {
            return redirect('/aluno')->with("errorMessage", "Não foi possível Cadastrar o Aluno. Preencha todos os campos.");
        }
    }

    public function viewEdit($id) {
        $aluno_aux = Aluno::find($id);
        $aluno = [];

        $curso = $aluno_aux->curso()->where('id', $aluno_aux->id_curso)->first();

        $aluno = $aluno_aux;
        $aluno['nome_curso'] = $curso->nome;

        $cursos = Curso::all();

        return View::make('aluno.edit')->with([
            'aluno' => $aluno,
            'cursos' => $cursos
        ]);
    }

    public function edit(Request $request) {
        try {
            Aluno::find($request->id)->update($request->all());
            return redirect('/aluno')->with("successMessage", "Aluno Editado Com Sucesso");
        } catch (Exception $e) {
            return redirect('/aluno')->with("errorMessage", "Não foi possível Editar o Aluno. Verifique todos os campos.");
        }
    }

    public function viewDelete($id) {
        $aluno = Aluno::find($id);

        return View::make('aluno.delete')->with('aluno', $aluno);
    }

    public function delete($id) {
        Aluno::find($id)->delete();

        $aluno = Aluno::all();

        return redirect('/aluno')->with("successMessage", "Aluno Deletado Com Sucesso");
    }

    public function generatePdf() {
        $alunos_aux = Aluno::all();
        $alunos = [];
        
        foreach ($alunos_aux as $aluno) {
            $curso = $aluno->curso()->where('id', $aluno->id_curso)->first();
        
            $tempAluno = $aluno;
            $tempAluno['curso'] = $curso->nome;

            $alunos[] = $tempAluno;
        }
       
        $pdf = PDF::loadview('aluno.pdf', ['alunos' => $alunos]);
        return $pdf->download('alunos.pdf');
    }
}
