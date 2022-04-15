<?php

use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/laravel', function () {
    return view('welcome');
});



Route::get('test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');



Route::get('/home', [HomeController::class, 'Index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//Admin
Route::middleware('auth')->prefix('admin')->group(function () {


        Route::get('/', [AdminPanelHomeController::class, 'index'])->name('admin_home');

        Route::get('category', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/create', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'create'])->name('admin_category_create');
        Route::post('category/store', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'store'])->name('admin_category_store');
        Route::get('category/edit/{id}', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/show', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'show'])->name('admin_category_show');

});
//Admin login işlemleri
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');
