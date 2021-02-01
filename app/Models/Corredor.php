<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corredor extends Model
{
    protected $table = 'corredores';

    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
    ];

    public function corredorProva()
    {
        return $this->hasMany('App\Models\CorredorProva', 'corredor_id');
    }
}
