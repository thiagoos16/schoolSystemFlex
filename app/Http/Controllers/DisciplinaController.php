<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;
use View;
use PDF;

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

    public function viewEdit($id) {
        $disciplina = Disciplina::find($id);

        return View::make('disciplina.edit')->with('disciplina', $disciplina);
    }

    public function edit(Request $request) {
        Disciplina::find($request->id)->update($request->all());

        return redirect('/disciplina')->with("successMessage", "Curso Editado Com Sucesso");
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
