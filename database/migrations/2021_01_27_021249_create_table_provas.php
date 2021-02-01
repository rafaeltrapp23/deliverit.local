<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProvas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provas', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('pk da tabela provas');
            $table->unsignedBigInteger('tipo_prova_id')->comment('fk da tabela tipo provas');
            $table->date('data_prova')->comment('data da prova');
            $table->timestamps();

            $table->foreign('tipo_prova_id')->references('id')->on('tipo_provas');

            $table->unique(['tipo_prova_id','data_prova'],'provas_un');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provas');
    }
}
