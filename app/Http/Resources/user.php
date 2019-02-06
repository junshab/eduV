<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class user extends JsonResource
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
            'password' => $this->password,
            'email_verified' => $this->email_verified,
            'phone_verified' => $this->phone_otp,
            'phone_otp' => $this->phone_verified,
            'role_id' => $this->role_id,
            'client_id' => $this->client_id,
            'is_admin'=>$this->is_admin,
            'remember_token' => $this->remember_token,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
