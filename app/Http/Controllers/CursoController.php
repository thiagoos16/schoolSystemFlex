<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Professor;
use App\Disciplina;
use App\Turma;
use View;
use PDF;
use Redirect;
use Exception;

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
        try {
            Curso::create($request->all());
            return redirect('/curso')->with("successMessage", "Curso Cadastrado Com Sucesso");
        } catch (Exception $e) {
            return redirect('/curso')->with("errorMessage", "Não foi possível Cadastrar o Curso. Preencha todos os campos.");
        }
    }

    public function viewEdit($id) {
        $curso = Curso::find($id);

        return View::make('curso.edit')->with('curso', $curso);
    }

    public function edit(Request $request) {
        try {
            Curso::find($request->id)->update($request->all());
            return redirect('/curso')->with("successMessage", "Curso Editado Com Sucesso");
        } catch (Exception $e) {
            return redirect('/curso')->with("errorMessage", "Não foi possível Editar o Curso. Verifique os campos.");
        }
        
    }

    public function viewDelete($id) {
        $curso = Curso::find($id);

        return View::make('curso.delete')->with('curso', $curso);
    }

    public function delete($id) {
        $curso = Curso::find($id);

        $alunos = $curso->alunos()->get();

        if (count($alunos) == 0) {
            Curso::find($id)->delete();
            return redirect('/curso')->with("successMessage", "Curso Deletado Com Sucesso.");
        } else {
            return redirect('/curso')->with("errorMessage", "Não foi Possível deletar o curso. Ele deve estar relacionado a alunos.");
        }
    }

    public function generatePdf() {
        $cursos = Curso::all();
       
        $pdf = PDF::loadview('curso.pdf', ['cursos' => $cursos]);
        return $pdf->download('cursos.pdf');
    }

    public function viewTurmas($id) {
        $curso = Curso::find($id);
        $disciplinas = Disciplina::all();
        $professores = Professor::all();

        $turmasCursoAux = $curso->turmas()->get();
        $turmasCurso = [];

        foreach ($turmasCursoAux as $turmaCursoAux) {
            $tempTurmaCurso = $turmaCursoAux;

            $disciplina = Disciplina::find($tempTurmaCurso->id_disciplina);
            $professor = Professor::find($tempTurmaCurso->id_professor);

            $tempTurmaCurso['professor_nome'] = $professor->nome;
            $tempTurmaCurso['disciplina_nome'] = $disciplina->nome;

            $turmasCurso[] = $tempTurmaCurso;
        }

        return view('curso.turmas',[
            'curso_id' => $curso->id,
            'turmasCurso' => $turmasCurso,
            'disciplinas' => $disciplinas,
            'professores' => $professores
        ]);
    }

    public function createTurmaCurso(Request $request) {
        try {
            $turma['sigla'] = $request->sigla;
            $turma['id_disciplina'] = $request->id_disciplina;
            $turma['id_professor'] = $request->id_professor;

            Turma::create($turma);
            $turmaCriada = Turma::orderBy('created_at', 'desc')->first();

            $curso = Curso::find($request->curso_id);
            $curso->turmas()->save($turmaCriada);

            return redirect('/curso/turmas/' . $request->curso_id)->with("successMessage", "Turma Criada com Sucesso.");
        } catch (Exception $e) {
            return redirect('/curso/turmas/' . $request->curso_id)->with("errorMessage", "Não foi possível criar a turma");
        }
    }
}
