<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RecruitmentController;
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
Route::get('about-us', [ConfigController::class, 'aboutUs'])->name('about.us');
Route::get('menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news-detail/{id}', [NewsController::class, 'detail'])->name('news.detail');
Route::get('branch', [BranchController::class, 'index'])->name('branch.index');
Route::get('recruitment', [RecruitmentController::class, 'index'])->name('recruitment.index');


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

});

// Error
Route::get('not-found', [HomeController::class, 'notfound'])->name('not.found');

//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'role.admin'], function () {
    require_once __DIR__ . '/admin.php';
});

