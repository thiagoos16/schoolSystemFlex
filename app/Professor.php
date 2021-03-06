<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor';

    protected $fillable = ['nome', 'data_nascimento'];

    public function turmas() {
        return $this->hasMany('App\Turma');
    }
}
