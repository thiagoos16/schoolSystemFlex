<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma';

    protected $fillable = ['sigla', 'id_professor', 'id_disciplina'];
}
