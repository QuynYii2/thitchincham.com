<?php

namespace App\Http\Controllers;

use App\Enums\CategoryStatus;
use App\Enums\ConfigStatus;
use App\Enums\MenuStatus;
use App\Enums\NewsStatus;
use App\Models\Category;
use App\Models\Config;
use App\Models\Menu;
use App\Models\News;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $categoryBestSeller = Category::where('name', 'Best seller')->first();
        $bestSellers = Menu::where([
            ['category_id', $categoryBestSeller->id],
            ['status', MenuStatus::ACTIVE]
        ])->get();

        $newMenus = Menu::where('status', MenuStatus::ACTIVE)->orderBy('created_at', 'desc')->limit(6)->get();
        $listNews = News::where('status', '!=', NewsStatus::DELETED)->get();
        $news = News::where('title', 'Về chúng tôi')->first();
        $categories = Category::where('status', CategoryStatus::ACTIVE)->orderBy('created_at', 'desc')->limit(6)->get();
        $config = Config::where('status', ConfigStatus::ACTIVE)->first();
        return view('clients.index', compact('bestSellers', 'listNews', 'news', 'newMenus', 'categories', 'config'));
    }

    public function checkAdmin()
    {
        $userRole = Auth::user()->role_id;
        $isAdmin = false;
        $role = Role::find($userRole);
        if ($role->name == \App\Enums\Role::ADMIN) {
            $isAdmin = true;
        }
        return $isAdmin;
    }

    public function notfound()
    {
        return view('error.404');
    }
}
