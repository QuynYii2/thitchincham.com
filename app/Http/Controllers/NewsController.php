<?php

namespace App\Http\Controllers;

use App\Enums\NewsStatus;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $listNews = News::where('status', '!=', NewsStatus::DELETED)->get();
        return view('clients.news', compact('listNews'));
    }

    public function detail($id)
    {
        $news = News::find($id);
        if (!$news || $news->status == NewsStatus::DELETED) {
            return redirect(route('not.found'));
        }
        $news->views = $news->views + 1;
        $news->save();
        return view('clients.news-detail', compact('news'));
    }
}
