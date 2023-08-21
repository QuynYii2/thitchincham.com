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
            Information::create($info);
            $newInfo = Information::where('email', $request->input('email'))->orderBy('created_at', 'desc')->first();
            setcookie("information_id", $newInfo->id, time() + 3600, "/");
            return back();
        } catch (\Exception $exception) {
            return back();
        }
    }
}
