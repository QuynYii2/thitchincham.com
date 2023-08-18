<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('clients.index');
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
