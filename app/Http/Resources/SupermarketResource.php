<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupermarketResource extends JsonResource
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
            'item'           =>$this->item,
            'price'          =>$this->price,
            'description'    =>$this->description,
            'photo'          =>asset('super_market_photos/' . $this->photo)
        ];
    }
}
