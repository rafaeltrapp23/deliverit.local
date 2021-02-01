<?php

namespace App\Http\Resources;

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
            'id'                => $this->id,
            'corredor_prova_id' => $this->corredor_prova_id,
            'horario_inicio'    => $this->horario_inicio,
            'horario_fim'       => $this->horario_fim,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
            'corredor_prova'    => new CorredorProvaResource($this->corredorProva),
        ];
    }
}

