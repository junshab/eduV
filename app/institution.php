<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institution extends Model
{
    protected $table = 'institutions';
    protected $fillable = ['institution_name', 'institution_type', 'address_id', 'email', 'phone', 'logo', 'phone_verified', 'email_verified', 'phone_otp'];
}
