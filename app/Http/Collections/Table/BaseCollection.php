<?php

namespace App\Http\Collections\Table;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BaseCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data'          => $this->collection,
            "current_page"  => $this->currentPage(),
            "last_page"     => $this->lastPage(),
            "per_page"      => $this->perPage(),
            "total"         => $this->total(),
        ];
    }
}
