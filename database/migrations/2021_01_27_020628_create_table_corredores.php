<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCorredores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredores', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('pk da tabela corredores');
            $table->string('nome', 200)->comment('nome completo do corredor');
            $table->string('cpf', 14)->comment('CPF do corredor');
            $table->date('data_nascimento')->comment('data de nascimento do corredor');
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
        Schema::dropIfExists('corredores');
    }
}
