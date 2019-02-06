<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'gender', 'date_of_birth', 'image', 'blood_group', 'religion', 'mother_tongue', 'nationality', 'birth_place', 'marital_status', 'mailing_address', 'permanent_address', 'education_id', 'address_id', 'user_id', 'client_id', 'phone_verified', 'email_verified'];
}
