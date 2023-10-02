<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MailConfig;
use Illuminate\Http\Request;

class AdminMailConfigController extends Controller
{
    public function index()
    {
        $mailConfigs = MailConfig::all();
        return view('admin.config-mail.list', compact('mailConfigs'));
    }

    public function processCreate()
    {
        return view('admin.config-mail.create');
    }

    public function create(Request $request)
    {
        try {
            $name = $request->input('name');
            $value = $request->input('value');
            $type = $request->input('type');

            $item = [
                'name' => $name,
                'value' => $value,
                'type' => $type,
            ];
            $success = MailConfig::create($item);
            if ($success) {
                alert()->success('Success', 'Create success!');
                return redirect(route('admin.show.all.configs.mail'));
            }
            alert()->error('Error', 'Create error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function detail($id)
    {
        $mailConfig = MailConfig::find($id);
        return view('admin.config-mail.detail', compact('mailConfig'));
    }

    public function update(Request $request, $id)
    {
        $mailConfig = MailConfig::find($id);
        try {
            $name = $request->input('name');
            $value = $request->input('value');
            $type = $request->input('type');

            $mailConfig->name = $name;
            $mailConfig->value = $value;
            $mailConfig->type = $type;

            $success = $mailConfig->save();
            if ($success) {
                alert()->success('Success', 'Update success!');
                return redirect(route('admin.show.all.configs.mail'));
            }
            alert()->error('Error', 'Update error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again!');
            return back();
        }
    }

    public function delete($id)
    {
        MailConfig::where('id', $id)->delete();
        alert()->success('Success', 'Delete success!');
        return redirect(route('admin.show.all.configs.mail'));
    }
}
