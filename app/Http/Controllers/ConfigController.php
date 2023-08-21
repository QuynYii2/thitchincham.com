<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function aboutUs(){
        $news = News::where('title', 'Về chúng tôi')->first();
        return view('clients.about-us', compact('news'));
    }
}
