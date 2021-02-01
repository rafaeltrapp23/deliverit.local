<?php

namespace App\Http\Resources\Table;

use Illuminate\Http\Resources\Json\JsonResource;

class CorredorProvaTableResource extends JsonResource
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
            'prova'       => new ProvaTableResource($this->prova),
            'corredor'    => new CorredorTableResource($this->corredor)
        ];
    }
}