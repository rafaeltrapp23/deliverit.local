<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CorredorResultado extends Model
{
    protected $table = 'corredor_resultados';

    protected $fillable = [
        'corredor_prova_id',
        'horario_inicio',
        'horario_fim',
    ];

    public function corredorProva()
    {
        return $this->belongsTo('App\Models\CorredorProva', 'corredor_prova_id');
    }

    public function rankingCorredores()
    {
        $sql = $this->join('corredor_provas as cp', 'cp.id', 'corredor_resultados.corredor_prova_id')
            ->join('corredores as c', 'c.id', 'cp.corredor_id')
            ->join('provas as p', 'p.id', 'cp.prova_id')
            ->join('tipo_provas as tp', 'tp.id', 'p.tipo_prova_id')
            ->select([
                'p.id',
                'tp.nome',
                'c.id',
                DB::raw('@tipo_prova:=p.tipo_prova_id AS tipo_prova'),
                DB::raw('@tempo:=CAST((horario_fim - horario_inicio) AS TIME) as tempo'),
                DB::raw('YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(c.data_nascimento))) AS idade'),
                DB::raw('@posicao:=CASE
                                    WHEN @tipo_prova <> p.tipo_prova_id THEN 1
                                    WHEN CAST(@tempo AS TIME) = (horario_fim - horario_inicio) THEN @posicao
                                    ELSE @posicao + 1
                                END AS posicao'),
                'c.nome',
                'p.tipo_prova_id'
            ])
            ->orderBy('p.tipo_prova_id')
            ->orderBy('p.id')
            ->orderBy('tempo')
            ->get();
        return $sql;
    }
}
