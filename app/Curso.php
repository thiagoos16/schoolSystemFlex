<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    protected $fillable = ['nome'];

    public function alunos() {
        return $this->hasMany('App\Aluno');
    }
}
