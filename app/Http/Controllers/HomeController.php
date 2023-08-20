<?php

namespace App\Http\Controllers;

use App\Enums\MenuStatus;
use App\Enums\NewsStatus;
use App\Models\Category;
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
        $listNews = News::where('status', '!=', NewsStatus::DELETED)->get();
        return view('clients.index', compact('bestSellers', 'listNews'));
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
