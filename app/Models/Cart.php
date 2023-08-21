<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'price', 'quantity', 'menu_id', 'information_id'];

    // Các mối quan hệ
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function information()
    {
        return $this->belongsTo(Information::class);
    }
}
