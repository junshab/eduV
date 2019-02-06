<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class student extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'admission_number' => $this->admission_number,
            'admission_date' => $this->admission_date,
            'course_batch_id' => $this->course_batch_id,
            'student_category' => $this->student_category,
            'student_type' => $this->student_type,
            'student_lives_with' => $this->student_lives_with,
            'roll_number' => $this->roll_number,
            'user_id' => $this->user_id,
            'profile_id' => $this->profile_id,
            'client_id' => $this->client_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
