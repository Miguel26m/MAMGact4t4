<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehiculoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
{
    return [
        'id' => $this->id,
        'marca' => $this->marca,
        'modelo' => $this->modelo,
        'anio' => $this->anio,
        'precio' => $this->precio,
    ];
}
}
