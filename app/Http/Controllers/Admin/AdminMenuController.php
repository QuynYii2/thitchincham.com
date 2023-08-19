<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryStatus;
use App\Enums\MenuStatus;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMenuController extends Controller
{
    public function index(Request $request)
    {
        $menus = Menu::where('status', '!=', MenuStatus::DELETED)->get();
        return view('admin.menu.list', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', CategoryStatus::ACTIVE)->get();
        return view('admin.menu.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $name = $request->input('name');
            $thumbnail = $request->file('thumbnail');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }
            $menu = [
                'name' => $name,
                'thumbnail' => $imageURL,
                'price' => $request->input('price'),
                'old_price' => $request->input('old_price'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'short_description' => $request->input('short_description'),
                'status' => $request->input('status'),
                'user_id' => Auth::user()->id,
            ];
            $success = Menu::create($menu);
            if ($success) {
//                alert()->success('Success', 'Create user success!');
                return redirect(route('admin.show.all.menus'));
            }
//            alert()->error('Error', 'Create user error');
            return back();
        } catch (\Exception $exception) {
//            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Category::where('status', CategoryStatus::ACTIVE)->get();
        $menu = Menu::find($id);
        if (!$menu || $menu->status == MenuStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.menu.detail', compact('categories', 'menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function toggle($id)
    {
        $menu = Menu::find($id);
        if (!$menu || $menu->status == MenuStatus::DELETED) {
            return response('Not found', 404);
        }
        if ($menu->status == MenuStatus::ACTIVE) {
            $menu->status = MenuStatus::INACTIVE;
        } else {
            $menu->status = MenuStatus::ACTIVE;
        }
        $menu->save();
        return $menu;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $menu = Menu::find($id);
            if (!$menu || $menu->status == MenuStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $name = $request->input('name');
            $thumbnail = $request->file('thumbnail');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = $menu->thumbnail;
            }

            $menu->name =$name;
            $menu->thumbnail =$imageURL;
            $menu->price =$request->input('price');
            $menu->old_price =$request->input('old_price');
            $menu->category_id =$request->input('category_id');
            $menu->description =$request->input('description');
            $menu->short_description =$request->input('short_description');
            $menu->status =$request->input('status');
            $menu->user_id =Auth::user()->id;

            $success = $menu->save();
            if ($success) {
//                alert()->success('Success', 'Create user success!');
                return redirect(route('admin.show.all.menus'));
            }
//            alert()->error('Error', 'Create user error');
            return back();
        } catch (\Exception $exception) {
//            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $menu = Menu::find($id);
            if (!$menu || $menu->status == MenuStatus::DELETED) {
                return redirect(route('not.found'));
            }
            $menu->status = MenuStatus::DELETED;
            $menu->save();
            return redirect(route('admin.show.all.products'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
