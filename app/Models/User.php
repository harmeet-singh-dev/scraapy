<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_type',
        'first_name',
        'last_name',
        'user_name',
        'email',
        'city',
        'region',
        'district',
        'mobile',
        'password',
        'company_name',
        'buyer',
        'location',
        'address',
        'landline',
        'company_website',
        'port_of_discharge',
        'country_of_final_destination',
        'terms_of_delivery',
        'payment_terms',
        'currency',
        'business_type',
        'logo',
        'company_c_r_number',
        'i_ban',
       
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
