<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class InformationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $info = [
                'fullName' => $request->input('fullName'),
                'phoneNumber' => $request->input('phoneNumber'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
            ];
            $oldInfo = Information::where([
                ['email', $request->input('email')],
                ['phoneNumber', $request->input('phoneNumber')]
            ])->first();
            if ($oldInfo) {
                setcookie("information_id", $oldInfo->id, time() + 3600, "/");
            } else {
                Information::create($info);
                $newInfo = Information::where('email', $request->input('email'))->orderBy('created_at', 'desc')->first();
                setcookie("information_id", $newInfo->id, time() + 3600, "/");
            }
            alert()->success('Thành công', 'Lưu thông tin thành công, tiếp tục đặt hàng...');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Thất bại', 'Không thể lưu thông tin, Thử lại sau...');
            return back();
        }
    }
}
