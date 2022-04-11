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



Route::get('/home2', function () {
    return view('welcome');
});



Route::get('test/{id}/{name}',[HomeController::class,'test'])->whereNumber('id')->whereAlpha('name')->name('test') ;



Route::get('/home',[HomeController::class,'Index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//Admin
Route::get('/admin',[AdminPanelHomeController::class,'index'])->name('adminhome');
Route::get('/admin/login',[AdminPanelHomeController::class,'login'])->name('adminlogin');
Route::post('/admin/logincheck',[Home])