<?php

namespace App\Services;

use App\Models\CorredorProva;
use App\Services\Contracts\ApiService;

class CorredorProvaService extends ApiService
{
    /**
     * @return CorredorProva
     */
    public function getModel()
    {
        return new CorredorProva();
    }

    /**
     * @return array
     */
    public function getRelationships()
    {
        return [
            'corredorResultado'
        ];
    }
}
