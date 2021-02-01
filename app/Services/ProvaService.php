<?php

namespace App\Services;

use App\Models\Prova;
use App\Services\Contracts\ApiService;

class ProvaService extends ApiService
{
    /**
     * @return Prova
     */
    public function getModel()
    {
        return new Prova();
    }

    /**
     * @return array
     */
    public function getRelationships()
    {
        return [];
    }
}
