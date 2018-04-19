<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma';

    protected $fillable = ['sigla', 'id_professor', 'id_disciplina'];

    public function professor() {
        return $this->belongsTo('App\Professor');
    }

    public function disciplina() {
        return $this->belongsTo('App\Disciplina');
    }

    public function alunos() {
        return $this->belongsToMany('App\Aluno')->withTimestamps();
    }

    public function cursos() {
        return $this->belongsToMany('App\Curso')->withTimestamps();
    }
}
