<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class institution extends JsonResource
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
            'institution_name' => $this->first_name,
            'institution_type' => $this->last_name,
            'address_id' => $this->phone,
            'email' => $this->email,
            'phone' => $this->gender,
            'logo' => $this->date_of_birth,
            'phone_verified' => $this->phone_verified,
            'email_verified' => $this->email_verified,
            'phone_otp' => $this->phone_otp,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
