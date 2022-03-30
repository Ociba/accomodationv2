<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'             =>$this->id,
            'equipment'      =>$this->equipment,
            'price'          =>$this->price,
            'description'    =>$this->description,
            'photo'          =>asset('equipment_photos/' . $this->photo)
        ];
    }
}