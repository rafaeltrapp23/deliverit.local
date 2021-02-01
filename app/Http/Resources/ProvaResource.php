<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProvaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'tipo_prova_id' => $this->tipo_prova_id,
            'data_prova'    => $this->data_prova,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
            'tipo_prova'    => new TipoProvaResource($this->tipoProva)
        ];
    }
}
