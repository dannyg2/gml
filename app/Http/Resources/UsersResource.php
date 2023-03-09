<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'name'=> $this->name,
            'last_name'=> $this->last_name,
            'document_number'=> $this->document_number,
            'email'=> $this->email,
            'country'=> $this->country,
            'address'=> $this->address,
            'movil'=> $this->movil,
            'category'=>$this->category->name
        ];
    }
}
