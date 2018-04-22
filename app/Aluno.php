<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'aluno';

    protected $fillable = ['nome', 'data_nascimento', 'id_curso',
                           'logradouro', 'numero', 'rua', 'bairro', 'cidade', 'estado', 'cep'];

    public function curso() {
        return $this->belongsTo('App\Curso', 'id_curso');
    }

    public function turmas() {
        return $this->belongsToMany('App\Turma')->withTimestamps();
    }
}
