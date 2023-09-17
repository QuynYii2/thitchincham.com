<?php

namespace App\Http\Controllers;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginProcess(Request $request)
    {
        if (Auth::check()) {
            return back();
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if ($user == null) {
            alert()->error('Error', 'Account not found');
            return back();
        }

        if ($user->status == UserStatus::DELETED) {
            alert()->error('Error', 'User has been deleted');
            return back();
        }

        if ($user->status == UserStatus::INACTIVE) {
            alert()->error('Error', 'User is not activated');
            return back();
        }

        if (!Hash::check($request->password, $user->password)) {
            alert()->error('Error', 'Password or Email is false');
            return back();
        }

        if (Auth::attempt($credentials)) {
            $isAdmin = (new HomeController())->checkAdmin();
            if ($isAdmin == true) {
                return redirect(route('admin.home'));
            }
            return redirect(route('home'));
        }
        alert()->error('Error', 'Please try again');
        return back();
    }

    public function processRegister(Request $request)
    {
        if (Auth::check()) {
            return back();
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        try {
            $email = $request->input('email');
            $password = $request->input('password');
            $passwordConfirm = $request->input('passwordConfirm');
            $user = User::where('email', $request->input('email'))->first();
            if ($user) {
                alert()->error('Error', 'Account already exits');
                return back();
            }

            if ($password != $passwordConfirm) {
                alert()->error('Error', 'Password or Password Confirm is incorrect');
                return back();
            }

            $credentials = [
                'fullName' => $request->input('fullName'),
                'email' => $email,
                'password' => Hash::make($password),
                'role_id' => env('APP_ROLE_USER_DEFAULT', 2),
                'avt' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/2048px-User-avatar.svg.png',
                'address' => 'Default Address',
                'status' => UserStatus::ACTIVE,
                'phoneNumber' => 'Default Phone Number',
            ];

            $success = User::create($credentials);

            if ($success) {
                alert()->success('Success', 'Register success! Please login to continue...');
                return redirect(route('process.login'));
            }
            alert()->error('Error', 'Register error');
            return back();
        } catch (\Exception $exception) {
            alert()->error('Error', 'Please try again');
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('process.login'));
    }
}
