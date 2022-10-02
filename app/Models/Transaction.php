<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'or_number',
        'id_number',
        'first_name',
        'miidle_name',
        'last_name',
        'blood_type',
        'gender',
        'date_of_birth',
        'mobile_Number',
        'address',
        'course',
        'college',
        'emergency_contact',
        'emergency_mobileNo',
        'emergency_address',

        'file_path_picture',
        'file_path_singature',

        'date_issued',
        'status',
        'active'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
