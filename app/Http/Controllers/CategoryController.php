<?php

namespace App\Http\Controllers;

use App\Enums\CategoryStatus;
use App\Enums\ConfigStatus;
use App\Enums\MenuStatus;
use App\Models\Category;
use App\Models\Config;
use App\Models\Menu;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list($id)
    {
        $menus = Menu::where([
            ['category_id', $id],
            ['status', MenuStatus::ACTIVE]
        ])->get();
        $category = Category::find($id);
        if (!$category || $category->status != CategoryStatus::ACTIVE){
            return  redirect(route('not.found'));
        }
        $config = Config::where('status', ConfigStatus::ACTIVE)->first();
        return view('clients.menu-category', compact('menus', 'category', 'config'));
    }
}
