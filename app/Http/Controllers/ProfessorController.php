<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
    public function index() {
        return Professor::all();
    }

    public function create(Request $request) {
        Professor::create($request->all());
        
        return $request->all();
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
