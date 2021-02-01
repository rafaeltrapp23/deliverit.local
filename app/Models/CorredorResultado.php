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
}
