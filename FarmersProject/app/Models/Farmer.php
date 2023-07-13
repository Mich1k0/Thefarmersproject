<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;


class Farmer extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;

    protected $primaryKey = 'farmer_id';

    protected $fillable = [
        'Farmer_ID',
        'National_ID',
        'Username',
        'password',
        'Name',
        'phone_Number',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
