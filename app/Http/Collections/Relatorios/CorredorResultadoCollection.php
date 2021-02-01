<?php

namespace App\Http\Collections\Relatorios;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CorredorResultadoCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */

    public $collects = 'App\Http\Resources\Relatorios\CorredorResultadoResource';
}