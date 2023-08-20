<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'uid' => $this->uid,
            'title' => $this->title,
            'description' => $this->description,
            'authors' => $this->authors,
            'favourite' => $this->pivot->favourite ?? $this->favourite ?? 0,
            'added' => $this->added ?? 1,
        ];
    }
}
