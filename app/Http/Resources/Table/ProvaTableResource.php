<?php

namespace App\Http\Resources\Table;

use Illuminate\Http\Resources\Json\JsonResource;

class ProvaTableResource extends JsonResource
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
            'tipo_prova_id' => $this->tipo_prova_id,
            'data_prova'    => $this->data_prova,
            'tipo_prova'    => [
                'nome' => $this->tipoProva->nome ?? ''
            ]
        ];
    }
}