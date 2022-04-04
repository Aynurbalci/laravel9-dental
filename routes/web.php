<?php

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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/', function () {
    return view('home.index',['name' =>'Ayyyy']);
});*/
Route::get('test/{id}/{name}',[HomeController::class,'test'])->whereNumber('id')->whereAlpha('name')->name('test') ;
Route::get('/home',[HomeController::class,'Index'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
