<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CorredorProvaResource extends JsonResource
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
            'id'          => $this->id,
            'corredor_id' => $this->corredor_id,
            'prova_id'    => $this->prova_id,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
            'prova'       => new ProvaResource($this->prova),
            'corredor'    => new CorredorResource($this->corredor)
        ];
    }
}

