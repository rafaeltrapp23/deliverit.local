<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewCorredorResultados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE VIEW v_corredores_resultados
            AS select
                p.id,
                p.tipo_prova_id,
                tp.nome,
                c.id,
                YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.data_nascimento))) AS idade,
                c.nome,
                @posicao :=
                CASE
                    WHEN @tipo_prova <> p.tipo_prova_id THEN 1
                    WHEN CAST(@tempo_gasto AS TIME) = (horario_fim - horario_inicio) THEN @posicao
                    ELSE @posicao + 1
                END AS posicao,
                @tipo_prova := p.tipo_prova_id AS tipo_prova,
                @tempo := CAST((horario_fim - horario_inicio) AS TIME) as tempo
            from
                corredor_resultados cr
            inner join corredor_provas cp on cp.id = cr.corredor_prova_id
            inner join corredores c on c.id = cp.corredor_id
            inner join provas p on p.id = cp.prova_id
            inner join tipo_provas tp on tp.id = p.tipo_prova_id
            order BY
                p.tipo_prova_id,
                p.id;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_corredor_resultados');
    }
}
