<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameNameTablesListas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('lista_alunos', 'turma_aluno');
        Schema::rename('lista_turmas', 'curso_turma');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('turma_aluno', 'lista_alunos');
        Schema::rename('curso_turma', 'lista_turmas');
    }
}
