<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ViewCorredorResultado extends Model
{
    protected $table = 'v_corredores_resultados';

    public $timestamps = false;

    public function rankingCorredores()
    {
        $sql = $this
            ->select([
                'prova_id',
                'tipo_prova_id',
                'tipo_prova_nome',
                'corredor_id',
                'corredor_data_nascimento',
                'corredor_nome',
                'resultado_horario_inicio',
                'resultado_horario_fim',
                'tempo',
                'idade',
                DB::raw('@posicao :=CASE WHEN @tipo_prova <> tipo_prova_id or @posicao is null THEN 1 ELSE @posicao + 1 END AS posicao'),
                DB::raw('@tipo_prova:=tipo_prova_id AS tipo_prova'),
            ])
            ->orderBy('tipo_prova_id')
            ->orderBy('prova_id')
            ->orderBy('tempo')
            ->get();
        return $sql;
    }

    public function rankingCorredoresIdade()
    {
        $subquery = $this
            ->select([
                'prova_id',
                'tipo_prova_id',
                'tipo_prova_nome',
                'corredor_id',
                'corredor_data_nascimento',
                'corredor_nome',
                'resultado_horario_inicio',
                'resultado_horario_fim',
                'faixa',
                'tempo',
                'idade'
            ])
            ->orderBy('tipo_prova_id')
            ->orderBy('prova_id')
            ->orderBy('tempo');

        return DB::table(DB::raw(" ( " . $subquery->toSql() . " ) AS custom"))
            ->select([
                'prova_id',
                'tipo_prova_nome',
                'tipo_prova_id',
                'corredor_id',
                'idade',
                'tempo',
                'corredor_nome',
                DB::raw('@posicao:=CASE WHEN @faixas <> faixa or @tipo_prova <> tipo_prova_id or @posicao is null THEN 1 ELSE @posicao + 1 END AS posicao'),
                DB::raw('@faixas:=faixa AS faixas'),
                DB::raw('@tipo_prova := tipo_prova_id AS tipo_prova')
            ])
            ->orderBy('faixa')
            ->orderBy('tipo_prova_id')
            ->get();
    }
}
