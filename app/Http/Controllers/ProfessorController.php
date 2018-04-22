<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

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

    public function update(Request $request, $id) {
        Professor::find($id)->update($request->all());

        return $request->all();
    }

    public function delete($id) {
        Professor::find($id)->delete();

        return Professor::all();
    }
}
