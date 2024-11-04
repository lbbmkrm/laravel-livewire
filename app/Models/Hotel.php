<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'star',
        'check_in_time',
        'checkout_time'
    ];
}
