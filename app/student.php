<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';
    protected $fillable = ['admission_number', 'admission_date', 'course_batch_id', 'student_category', 'student_type', 'student_lives_with', 'roll_number', 'user_id', 'profile_id', 'client_id'];
}
