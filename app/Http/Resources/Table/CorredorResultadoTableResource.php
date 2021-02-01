<?php

namespace App\Http\Resources\Table;

use App\Http\Resources\CorredorProvaResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CorredorResultadoTableResource extends JsonResource
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
            'corredor_prova'    => new CorredorProvaResource($this->corredorProva),
        ];
    }
}