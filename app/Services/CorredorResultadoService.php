<?php

namespace App\Services;

use App\Models\CorredorResultado;
use App\Services\Contracts\ApiService;

class CorredorResultadoService extends ApiService
{
    /**
     * @return CorredorResultado
     */
    public function getModel()
    {
        return new CorredorResultado();
    }

    /**
     * @return array
     */
    public function getRelationships()
    {
        return [];
    }
}
