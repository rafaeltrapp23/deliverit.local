<?php

namespace App\Http\Resources\Relatorios;

use Illuminate\Http\Resources\Json\JsonResource;

class CorredorResultadoResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'prova_id'          => $this->prova_id,
            'tipo_prova_nome'   => $this->tipo_prova_nome,
            'corredor_id'       => $this->corredor_id,
            'idade'             => $this->idade,
            'corredor_nome'     => $this->corredor_nome,
            'posicao'           => $this->posicao,
            'tempo'             => $this->tempo,
            'tipo_prova_id'     => $this->tipo_prova_id
        ];
    }
}

