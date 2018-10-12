<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Service extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'position' =>[
            'lat' =>(float) $this->lat,
            'lng' =>(float) $this->lng,
            ], 
            'infoContent' =>[
                'infoText' =>$this->name,
                'infoDetails' =>$this->details, ]   
        ];
    }
}
