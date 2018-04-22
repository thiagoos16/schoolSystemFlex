<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use View;
use PDF;
use Exception;

class ProfessorController extends Controller
{
    public function index() {
        $professores = Professor::all();

        return view('professor/index', [
            'professores' => $professores
        ]);
    }

    public function viewCreate() {
        return view('professor.create');
    }

    public function create(Request $request) {
        try {
            Professor::create($request->all());
            return redirect('/professor')->with("successMessage", "Professor Cadastrado Com Sucesso");
        } catch (Exception $e) {
            return redirect('/professor')->with("errorMessage", "Não foi possível Cadastrar o Professor. Preencha todos os campos.");
        }
        
    }

    public function viewEdit($id) {
        $professor = Professor::find($id);

        return View::make('professor.edit')->with('professor', $professor);
    }

    public function edit(Request $request) {
        try {
            Professor::find($request->id)->update($request->all());
            return redirect('/professor')->with("successMessage", "Professor Editado Com Sucesso");
        } catch (Exception $e) {
            return redirect('/professor')->with("errorMessage", "Não foi possível Editar o Professor. Verifique os campos.");
        }
    }

    public function viewDelete($id) {
        $professor = Professor::find($id);

        return View::make('professor.delete')->with('professor', $professor);
    }

    public function delete($id) {
        Professor::find($id)->delete();

        $professor = Professor::all();

        return redirect('/professor')->with("successMessage", "Professor Deletado Com Sucesso");
    }

    public function generatePdf() {
        $professores = Professor::all();
       
        $pdf = PDF::loadview('professor.pdf', ['professores' => $professores]);
        return $pdf->download('professores.pdf');
    }
}
