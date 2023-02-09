<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CreditRequestResource extends JsonResource
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
            "rate" => $this->rate,
            "period" => $this->period,
            "amount" => $this->amount,
            "monthlyRate" => $this->amount * (1 + $this->rate / 100) / $this->period,
            "credit" => new CreditResource($this->credit),
            "client" => new ClientResource($this->client)
        ];
    }
}
