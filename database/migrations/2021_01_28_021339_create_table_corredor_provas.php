<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCorredorProvas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredor_provas', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('pk tabela corredor provas');
            $table->unsignedBigInteger('corredor_id')->comment('fk da tabela corredores');
            $table->unsignedBigInteger('prova_id')->comment('fk da tabela provas');
            $table->timestamps();

            $table->foreign('corredor_id')->references('id')->on('corredores');
            $table->foreign('prova_id')->references('id')->on('provas');

            $table->unique(['corredor_id','prova_id'],'corredor_provas_un');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corredor_provas');
    }
}
