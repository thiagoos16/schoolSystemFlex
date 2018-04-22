<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;
use View;
use PDF;
use Exception;

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
        try {
            Disciplina::create($request->all());
            return redirect('disciplina/')->with("successMessage", "Disciplina Cadastrada Com Sucesso.");
        } catch (Exception $e) {
            return redirect('/disciplina')->with("errorMessage", "Não foi possível Cadastrar a Disciplina. Preencha todos os campos.");
        }
    }

    public function viewEdit($id) {
        $disciplina = Disciplina::find($id);

        return View::make('disciplina.edit')->with('disciplina', $disciplina);
    }

    public function edit(Request $request) {
        try {
            Disciplina::find($request->id)->update($request->all());
            return redirect('/disciplina')->with("successMessage", "Curso Editado Com Sucesso.");
        } catch (Exception $e) {
            return redirect('/disciplina')->with("errorMessage", "Não foi possível Editar a Disciplina. Verifique os campos.");
        }
    }

    public function viewDelete($id) {
        $disciplina = Disciplina::find($id);

        return View::make('disciplina.delete')->with('disciplina', $disciplina);
    }

    public function delete($id) {
        Disciplina::find($id)->delete();

        return redirect('/disciplina')->with("successMessage", "Curso Deletado Com Sucesso");
    }

    public function generatePdf() {
        $disciplinas = Disciplina::all();
       
        $pdf = PDF::loadview('disciplina.pdf', ['disciplinas' => $disciplinas]);
        return $pdf->download('disciplinas.pdf');
    }
}
