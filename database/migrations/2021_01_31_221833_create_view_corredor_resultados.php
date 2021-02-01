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
                p.id as prova_id,
                p.tipo_prova_id as tipo_prova_id,
                tp.nome as tipo_prova_nome,
                c.id as corredor_id,
                c.data_nascimento as corredor_data_nascimento,
                c.nome as corredor_nome,
                horario_fim as resultado_horario_fim,
                horario_inicio as resultado_horario_inicio,
                YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.data_nascimento))) as idade,
                CAST((horario_fim - horario_inicio) AS TIME) as tempo,
                CASE
                    WHEN YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.data_nascimento))) BETWEEN 18 AND 25 THEN \'18_25\'
                    WHEN YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.data_nascimento))) BETWEEN 26 AND 35 THEN \'26_35\'
                    WHEN YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.data_nascimento))) BETWEEN 36 AND 45 THEN \'36_45\'
                    WHEN YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.data_nascimento))) BETWEEN 46 AND 55 THEN \'46_55\'
                    WHEN YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.data_nascimento))) > 55 THEN \'55\'
                END AS faixa
            from
                corredor_resultados cr
            inner join corredor_provas cp on cp.id = cr.corredor_prova_id
            inner join corredores c on c.id = cp.corredor_id
            inner join provas p on p.id = cp.prova_id
            inner join tipo_provas tp on tp.id = p.tipo_prova_id;
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
