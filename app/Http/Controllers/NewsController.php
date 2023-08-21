<?php

namespace App\Http\Controllers;

use App\Enums\ConfigStatus;
use App\Enums\NewsStatus;
use App\Models\Config;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $listNews = News::where('status', '!=', NewsStatus::DELETED)->get();
        $config = Config::where('status', ConfigStatus::ACTIVE)->first();
        return view('clients.news', compact('listNews', 'config'));
    }

    public function detail($id)
    {
        $news = News::find($id);
        if (!$news || $news->status == NewsStatus::DELETED) {
            return redirect(route('not.found'));
        }
        $news->views = $news->views + 1;
        $news->save();
        $moreNews = News::where([
            ['status', NewsStatus::ACTIVE],
            ['id', '!=', $id]
        ])->limit(3)->orderBy('created_at', 'desc')->get();
        return view('clients.news-detail', compact('news', 'moreNews'));
    }
}
