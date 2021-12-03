<?php

namespace App\http\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toJson($request)
    {
        return [
            'data' => [
                'name' => $this->name()->value(),
                'price' => $this->price()->value(),
                'quantity' => $this->quantity()->value()
            ]
        ];
    }
}
