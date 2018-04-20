<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    public function index() {
        return Aluno::all();
    }

    public function create(Request $request) {
        Aluno::create($request->all());
        
        return $request->all();
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
