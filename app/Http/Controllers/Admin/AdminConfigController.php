<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ConfigStatus;
use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class AdminConfigController extends Controller
{
    public function index()
    {
        $configs = Config::where('status', '!=', ConfigStatus::DELETED)->get();
        return view('admin.config.list', compact('configs'));
    }

    public function createProcess()
    {
        return view('admin.config.create');
    }

    public function create(Request $request)
    {
        try {
            $thumbnail = $request->file('logo');
            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = null;
            }

            $config = [
                'hotline' => $request->input('hotline'),
                'logo' => $imageURL,
                'cskh' => $request->input('cskh'),
                'facebook' => $request->input('facebook'),
                'zalo' => $request->input('zalo'),
                'status' => $request->input('status'),
            ];

            Config::create($config);
            return redirect(route('admin.show.all.configs'));
        } catch (\Exception $exception) {
            return back();
        }
    }

    public function detail($id)
    {
        $config = Config::find($id);
        if (!$config || $config->status == ConfigStatus::DELETED) {
            return redirect(route('not.found'));
        }
        return view('admin.config.detail', compact('config'));
    }

    public function update(Request $request, $id)
    {
        try {
            $config = Config::find($id);
            $thumbnail = $request->file('logo');
            if ($thumbnail) {
                $imageName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $destinationPath = public_path('upload/images');
                $thumbnail->move($destinationPath, $imageName);
                $imageURL = asset('upload/images/' . $imageName);
            } else {
                $imageURL = $config->logo;
            }

            $config->hotline = $request->input('hotline');
            $config->logo = $imageURL;
            $config->cskh = $request->input('cskh');
            $config->facebook = $request->input('facebook');
            $config->zalo = $request->input('zalo');
            $config->status = $request->input('status');

            $config->save();
            return redirect(route('admin.show.all.configs'));
        } catch (\Exception $exception) {
            return back();
        }
    }

    public function delete($id)
    {
        $config = Config::find($id);
        if (!$config || $config->status == ConfigStatus::DELETED) {
            return redirect(route('not.found'));
        }
        $config->status = ConfigStatus::DELETED;
        $config->save();
        return redirect(route('admin.show.all.configs'));
    }
}
