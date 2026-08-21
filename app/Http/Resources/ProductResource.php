<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'stock' => $this->stock,

            // Relasi kategori
            'id_kategori' => $this->id_kategori,
            'kategori' => $this->kategori
                ? $this->kategori->name
                : null,

            'created_at' => $this->created_at
                ? $this->created_at->format('Y-m-d H:i:s')
                : null,

            'updated_at' => $this->updated_at
                ? $this->updated_at->format('Y-m-d H:i:s')
                : null,
        ];
    }
}