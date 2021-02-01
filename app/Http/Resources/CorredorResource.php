<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CorredorResource extends JsonResource
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
            'id'              => $this->id,
            'nome'            => $this->nome,
            'cpf'             => $this->cpf,
            'data_nascimento' => $this->data_nascimento,
            'created_at'      => $this->created_at,
            'updated_at'      => $this->updated_at,
        ];
    }
}