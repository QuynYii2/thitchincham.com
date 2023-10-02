<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotline',
        'logo',
        'cskh',
        'facebook',
        'zalo',
        'email',
        'status',
    ];
}
