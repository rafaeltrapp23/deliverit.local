<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCorredorResultados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredor_resultados', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('pk da tabela corredor resultados');
            $table->unsignedBigInteger('corredor_prova_id')->comment('fk da tabela corredor provas');
            $table->time('horario_inicio');
            $table->time('horario_fim');
            $table->timestamps();

            $table->foreign('corredor_prova_id')->references('id')->on('corredor_provas');

            $table->unique(['corredor_prova_id'],'corredor_resultados_un');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corredor_resultados');
    }
}
