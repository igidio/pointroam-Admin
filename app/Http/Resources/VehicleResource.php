<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'carID' => $this->carID,
            'brand' => $this->brand,
            'model' => $this->model,
            'loadingCapacity' => $this->loadingCapacity,
            'fuelCapacity' => $this->fuelCapacity,
            'wheelNumber' => $this->wheelNumber,
            'id_chofer' => $this->id_chofer,
            'created_at' => $this->created_at->toDateString(),
            'updated_at' => $this->updated_at->toDateString()
        ];
    }
}
