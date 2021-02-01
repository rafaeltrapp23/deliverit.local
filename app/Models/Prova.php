<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    protected $table = 'provas';

    protected $fillable = [
        'tipo_prova_id',
        'data_prova',
    ];

    public function tipoProva()
    {
        return $this->belongsTo('App\Models\TipoProva', 'tipo_prova_id');
    }

    public function corredorProva()
    {
        return $this->hasMany('App\Models\CorredorProva', 'prova_id');
    }
}
