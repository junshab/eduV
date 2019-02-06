<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class profile extends JsonResource
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
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'image' => $this->image,
            'blood_group' => $this->blood_group,
            'religion' => $this->religion,
            'mother_tongue' => $this->mother_tongue,
            'nationality' => $this->nationality,
            'birth_place' => $this->birth_place,
            'marital_status' => $this->marital_status,
            'mailing_address' => $this->mailing_address,
            'permanent_address' => $this->permanent_address,
            'education_id' => $this->education_id,
            'location_id' => $this->location_id,
            'user_id' => $this->user_id,
            'client_id' => $this->client_id,
            'phone_verified' => $this->phone_verified,
            'email_verified' => $this->email_verified,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
