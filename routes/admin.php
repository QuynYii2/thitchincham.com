<?php


use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [AdminHomeController::class, 'dashboard'])->name('admin.home');

//// User
//Route::group(['prefix' => 'users'],function (){
//    Route::get('list', [AdminUserController::class, 'getList'])->name('admin.show.all.users');
//    Route::get('detail/{id}', [AdminUserController::class, 'detail'])->name('admin.show.detail.user');
//    Route::put('update/{id}', [AdminUserController::class, 'update'])->name('admin.update.user');
//    Route::get('create', [AdminUserController::class, 'createProcess'])->name('admin.user.processCreate');
//    Route::post('create', [AdminUserController::class, 'create'])->name('admin.user.create');
//    Route::delete('delete/{id}', [AdminUserController::class, 'delete'])->name('admin.delete.user');
//});
// Category
Route::group(['prefix' => 'categories'], function () {
    Route::get('list', [AdminCategoryController::class, 'index'])->name('admin.show.all.categories');
    Route::get('detail/{id}', [AdminCategoryController::class, 'show'])->name('admin.show.detail.category');
    Route::put('update/{id}', [AdminCategoryController::class, 'update'])->name('admin.update.category');
    Route::get('create', [AdminCategoryController::class, 'create'])->name('admin.category.processCreate');
    Route::post('create', [AdminCategoryController::class, 'store'])->name('admin.category.create');
    Route::delete('delete/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.delete.category');
    Route::post('toggle/{id}', [AdminCategoryController::class, 'toggle'])->name('admin.category.toggle');
});
// Menu
Route::group(['prefix' => 'menus'], function () {
    Route::get('list', [AdminMenuController::class, 'index'])->name('admin.show.all.menus');
    Route::get('detail/{id}', [AdminMenuController::class, 'show'])->name('admin.show.detail.menu');
    Route::put('update/{id}', [AdminMenuController::class, 'update'])->name('admin.update.menu');
    Route::get('create', [AdminMenuController::class, 'create'])->name('admin.menu.processCreate');
    Route::post('create', [AdminMenuController::class, 'store'])->name('admin.menu.create');
    Route::delete('delete/{id}', [AdminMenuController::class, 'destroy'])->name('admin.delete.menu');
    Route::post('toggle/{id}', [AdminMenuController::class, 'toggle'])->name('admin.menu.toggle');
});
// News
Route::group(['prefix' => 'news'], function () {
    Route::get('list', [AdminNewsController::class, 'index'])->name('admin.show.all.news');
    Route::get('detail/{id}', [AdminNewsController::class, 'detail'])->name('admin.show.detail.news');
    Route::put('update/{id}', [AdminNewsController::class, 'update'])->name('admin.update.news');
    Route::get('create', [AdminNewsController::class, 'createProcess'])->name('admin.news.processCreate');
    Route::post('create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::delete('delete/{id}', [AdminNewsController::class, 'delete'])->name('admin.delete.news');
});


// News
Route::group(['prefix' => 'orders'], function () {
    Route::get('list', [AdminOrderController::class, 'index'])->name('admin.show.all.orders');
    Route::get('detail/{id}', [AdminOrderController::class, 'detail'])->name('admin.show.detail.order');
    Route::put('update/{id}', [AdminOrderController::class, 'update'])->name('admin.update.order');
    Route::delete('delete/{id}', [AdminOrderController::class, 'delete'])->name('admin.delete.order');
});