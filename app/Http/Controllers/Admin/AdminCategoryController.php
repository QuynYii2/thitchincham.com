<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryStatus;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('status', '!=', CategoryStatus::DELETED)->get();
        return view('admin.category.list', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $name = $request->input('name');

            $exitsCategory = Category::where([['name', $name], ['status', '!=', CategoryStatus::DELETED]])->first();
            if ($exitsCategory) {
//                alert()->error('Error', 'Category already exits');
                return back();
            }

            $thumbnail = $request->file('thumbnail');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }

            $category = [
                'name' => $name,
                'thumbnail' => $imageURL,
                'user_id' => Auth::user()->id,
            ];
            $success = Category::create($category);
            if ($success) {
//                alert()->success('Success', 'Create user success!');
                return redirect(route('admin.show.all.categories'));
            }
//            alert()->error('Error', 'Create user error');
            return back();
        } catch (\Exception $exception) {
//            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function show($id)
    {
        $category = Category::find($id);
        if (!$category || $category->status == CategoryStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.category.detail', compact('category'));
    }

    public function toggle(string $id)
    {
        try {
            $category = Category::find($id);
            if (!$category || $category->status == CategoryStatus::DELETED) {
                return response('Not found', 404);
            }
            if ($category->status == CategoryStatus::ACTIVE) {
                $category->status = CategoryStatus::INACTIVE;
            } else {
                $category->status = CategoryStatus::ACTIVE;
            }
            $category->save();
            return $category;
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $category = Category::find($id);
            if (!$category || $category->status == CategoryStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $name = $request->input('name');

            if ($name != $category->name) {
                $exitsCategory = Category::where([['name', $name], ['status', '!=', CategoryStatus::DELETED]])->first();
                if ($exitsCategory) {
//                alert()->error('Error', 'Category already exits');
                    return back();
                }
            }

            $imageName = $category->thumbnail;

            if ($request->has('thumbnail')) {
                $imageName = time() . '.' . $request->file('thumbnail')->extension();
                $request->file('thumbnail')->move(public_path('upload/images'), $imageName);
                $imageName = asset('upload/images/' . $imageName);
            }

            $category->name = $name;
            $category->thumbnail = $imageName;
            $category->user_id = Auth::user()->id;;
            $category->status = $request->input('status');;

            $success = $category->save();
            if ($success) {
//                alert()->success('Success', 'Create user success!');
                return redirect(route('admin.show.all.categories'));
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
            $category = Category::find($id);
            if (!$category || $category->status == CategoryStatus::DELETED) {
                return response('Not found', 404);
            }
            $category->status = CategoryStatus::DELETED;
            $category->save();
            return redirect(route('admin.show.all.categories'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
