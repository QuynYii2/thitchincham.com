<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

// PermitALl
Route::get('not-found', [HomeController::class, 'notfound'])->name('not.found');

// Auth
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'loginProcess'])->name('process.login');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('register', [AuthController::class, 'processRegister'])->name('process.register');
    Route::post('register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

// Authenticate
Route::middleware(['auth'])->group(function () {
    // User
//    Route::get('my-profile', [UserController::class, 'profile'])->name('my.profile');
//    Route::post('change-password', [UserController::class, 'changePassword'])->name('user.change.password');
//    Route::post('update-info', [UserController::class, 'updateInfo'])->name('user.update.info');
});


//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'role.admin'], function () {
    require_once __DIR__ . '/admin.php';
});

