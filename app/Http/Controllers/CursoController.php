<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index() {
        return Curso::all();
    }

    public function create(Request $request) {
        Curso::create($request->all());
        
        return $request->all();
    }

    public function update(Request $request, $id) {
        Curso::find($id)->update($request->all());

        return $request->all();
    }

    public function delete($id) {
        Curso::find($id)->delete();

        return Curso::all();
    }
}