<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mensagem');
            $table->integer('id_ficha_de_treino')->unsigned();
            $table->foreign('id_ficha_de_treino')->references('id')->on('ficha_de_treino_table')->onDelete('cascade');
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
        Schema::dropIfExists('feedback_table');
    }
}
