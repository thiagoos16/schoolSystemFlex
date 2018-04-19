<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplina';

    protected $fillable = ['Nome'];

    public function turmas() {
        return $this->hasMany('App\Turma');
    }
}
