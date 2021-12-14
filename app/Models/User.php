<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'photo',
        'gender',
        'medium',
        'name',
        'name_eng',
        'father_name',
        'father_occupation',
        'father_name_eng',
        'mother_name',
        'mother_occupation',
        'mother_name_eng',
        'present_address',
        'parmanent_address',
        'mobile_number',
        'birth_date',
        'school_name',
        'shift',
        'school_name_eng',
        'class_name',
        'section_name',
        'roll_no',
        'division',
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
