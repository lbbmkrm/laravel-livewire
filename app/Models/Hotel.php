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
        'star'
    ];
}
