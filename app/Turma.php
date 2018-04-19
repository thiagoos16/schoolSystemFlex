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
}
