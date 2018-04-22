<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use View;

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
        Professor::create($request->all());

        return redirect('professor/')->with("successMessage", "Professor Cadastrado Com Sucesso");
    }

    public function viewEdit($id) {
        $professor = Professor::find($id);

        return View::make('professor.edit')->with('professor', $professor);
    }

    public function edit(Request $request) {
        Professor::find($request->id)->update($request->all());

        return redirect('/professor')->with("successMessage", "Professor Editado Com Sucesso");
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
}
