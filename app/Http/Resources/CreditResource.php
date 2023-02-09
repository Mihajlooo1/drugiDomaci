<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CreditResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "minPeriod" => $this->min_period,
            "maxPeriod" => $this->max_period,
            "minAmount" => $this->min_amount,
            "maxAmount" => $this->max_amount,
            "rate" => $this->rate
        ];
    }
}
