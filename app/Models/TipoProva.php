<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoProva extends Model
{
    protected $table = 'tipo_provas';

    protected $fillable = [
        'nome',
    ];

    public function prova()
    {
        return $this->hasMany('App\Models\Prova', 'tipo_prova_id');
    }
}
