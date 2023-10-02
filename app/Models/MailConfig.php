<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'value',
        'type',
//        'type',
//        'driver',
//        'host',
//        'port',
//        'username',
//        'password',
//        'encryption'
    ];
}
