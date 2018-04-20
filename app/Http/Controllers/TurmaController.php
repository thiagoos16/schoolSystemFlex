<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;

class TurmaController extends Controller
{
    public function index() {
        return Turma::all();
    }

    public function create(Request $request) {
        Turma::create($request->all());
        
        return $request->all();
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
