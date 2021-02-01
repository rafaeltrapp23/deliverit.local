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
            'id'            => $this->id,
            'nome'          => $this->nome,
            'idade'         => $this->idade,
            'posicao'       => $this->posicao,
            'tipo_prova'    => $this->tipo_prova,
            'tempo'         => $this->tempo,
            'tipo_prova_id' => $this->tipo_prova_id
        ];
    }
}

