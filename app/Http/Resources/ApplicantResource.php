<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicantResource extends JsonResource
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
            
            'id'=> $this->id,
            'applicant'=>ucwords($this->name),
            'occupation'=>ucwords($this->occupation),
            'email'=>$this->email,
            'number'=>$this->phone_number

        ];
    }
}
