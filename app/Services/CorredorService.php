<?php

namespace App\Services;

use App\Models\Corredor;
use App\Services\Contracts\ApiService;

class CorredorService extends ApiService
{
    /**
     * @return Corredor
     */
    public function getModel()
    {
        return new Corredor();
    }

    /**
     * @return array
     */
    public function getRelationships()
    {
        return [];
    }
}
