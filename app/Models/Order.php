<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'information_id',
        'total',
        'status',
        'menu_id'
    ];

    public function information()
    {
        return $this->belongsTo(Information::class);
    }
}
