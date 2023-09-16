<?php

namespace App\Http\Controllers\Admin;

use App\Enums\NewsStatus;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminNewsController extends Controller
{
    public function index()
    {
        $listNews = News::where('status', '!=', NewsStatus::DELETED)->get();
        return view('admin.news.list', compact('listNews'));
    }

    public function createProcess()
    {
        return view('admin.news.create');
    }

    public function create(Request $request)
    {
        try {
            $title = $request->input('title');
            $thumbnail = $request->file('thumbnail');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }
            $news = [
                'title' => $title,
                'thumbnail' => $imageURL,
                'content' => $request->input('content'),
                'short_content' => $request->input('short_content'),
                'status' => $request->input('status'),
                'user_id' => Auth::user()->id,
            ];
            $success = News::create($news);
            if ($success) {
//                alert()->success('Success', 'Create user success!');
                return redirect(route('admin.show.all.news'));
            }
//            alert()->error('Error', 'Create user error');
            return back();
        } catch (\Exception $exception) {
//            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function detail($id)
    {
        $news = News::find($id);
        if (!$news || $news->status == NewsStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.news.detail', compact('news'));
    }

    public function toggle($id)
    {
        $news = News::find($id);
        if (!$news || $news->status == NewsStatus::DELETED) {
            return response('Not found', 404);
        }
        if ($news->status == NewsStatus::ACTIVE) {
            $news->status = NewsStatus::INACTIVE;
        } else {
            $news->status = NewsStatus::ACTIVE;
        }
        $news->save();
        return $news;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $news = News::find($id);
            if (!$news || $news->status == NewsStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $title = $request->input('title');
            $thumbnail = $request->file('thumbnail');

            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = $news->thumbnail;
            }

            $news->title = $title;
            $news->thumbnail = $imageURL;
            $news->content = $request->input('content');
            $news->short_content = $request->input('short_content');
            $news->status = $request->input('status');
            $news->user_id = Auth::user()->id;

            $success = $news->save();
            if ($success) {
//                alert()->success('Success', 'Create user success!');
                return redirect(route('admin.show.all.news'));
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
    public function delete(string $id)
    {
        try {
            $news = News::find($id);
            if (!$news || $news->status == NewsStatus::DELETED) {
                return redirect(route('not.found'));
            }

            $news->status = NewsStatus::DELETED;
            $news->save();
            return redirect(route('admin.show.all.news'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
