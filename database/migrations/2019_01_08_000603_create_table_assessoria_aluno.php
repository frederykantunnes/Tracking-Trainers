<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAssessoriaAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessoria_aluno_table', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_assessoria')->unsigned();
            $table->foreign('id_assessoria')->references('id')->on('assessoria_table')->onDelete('cascade');
            $table->integer('id_aluno')->unsigned();
            $table->foreign('id_aluno')->references('id')->on('aluno_table')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessoria_aluno_table');
    }
}
