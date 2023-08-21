<?php

namespace App\Http\Controllers;

use App\Enums\MenuStatus;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $menus = Menu::where('status', MenuStatus::ACTIVE)->orderBy('created_at', 'desc')->get();
        return view('clients.menu', compact('menus'));
    }

    public function detail($id)
    {
        $menu = Menu::find($id);
        if (!$menu || $menu->status == MenuStatus::DELETED) {
            return redirect(route('not.found'));
        }
        $moreMenus = Menu::where([
            ['category_id', $menu->category_id],
            ['status', MenuStatus::ACTIVE],
            ['id', '!=', $id]
        ])->limit(3)->orderBy('created_at', 'desc')->get();
        return view('clients.menu-detail', compact('menu', 'moreMenus'));
    }
}
