<?php


use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [AdminHomeController::class, 'dashboard'])->name('admin.home');