<?php

use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminPanelCategoryController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\ProcessController;
use App\Http\Controllers\AdminPanel\TreatmentController as AdminPanelTreatmentController;
use App\Http\Controllers\AdminPanel\ImageController as AdminPanelImageController;
use App\Http\Controllers\UserController;
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


Route::get('test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');


// HOME PAGE ROUTES
Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//user admin control
Route::middleware('auth')->group(function () {

//USer routes
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
        Route::get('/processes', 'processes')->name('processes');
        Route::get('/processdetail/{id}', 'processdetail')->name('processdetail');
        Route::get('/canceltreatment/{id}', 'canceltreatment')->name('canceltreatment');


    });
    // randevu routes

    Route::prefix('/randevu')->name('randevu.')->controller(\App\Http\Controllers\RandevuController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/add/{id}', 'add')->name('add');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/process', 'process')->name('process');
        Route::post('/storeprocess', 'storeprocess')->name('storeprocess');
        Route::get('/processcomplete', 'processcomplete')->name('processcomplete');

    });


    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminPanelHomeController::class, 'index'])->name('index');

        // admin general


        Route::get('/setting', [AdminPanelHomeController::class, 'setting'])->name('setting');
        Route::post('/setting', [AdminPanelHomeController::class, 'settingUpdate'])->name('setting.update');

        // admin category

        Route::prefix('/category')->name('category.')->controller(AdminPanelCategoryController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });
        //Admin treatment
        Route::prefix('/treatment')->name('treatment.')->controller(AdminPanelTreatmentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });
        // Admin treatment image galery routes
        Route::prefix('/image')->name('image.')->controller(AdminPanelImageController::class)->group(function () {
            Route::get('/{pid}', 'index')->name('index');
            Route::post('/store/{pid}', 'store')->name('store');
            Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
        });
        // Admin message routes
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');

        });
        //Admin faq  routes
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
        });
//admin comment routes
        Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');

        });
        //admin user routes
        Route::prefix('/user')->name('user.')->controller(\App\Http\Controllers\AdminPanel\AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');


        });
        //Admin processes  routes
        Route::prefix('/process')->name('process.')->controller(ProcessController::class)->group(function () {
            Route::get('/{slug}', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('destroy');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/cancelprocess/{id}', 'cancelprocess')->name('cancelprocess');
            Route::get('/canceltreatment/{id}', 'canceltreatment')->name('canceltreatment');
            Route::get('/accepttreatment/{id}', 'accepttreatment')->name('accepttreatment');


        });
    }); //Admin Panel Routes group
});//user auth group

Route::post('/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/treatment/{id}', [HomeController::class, 'treatment'])->name('treatment');
Route::get('/categorytreatments/{id}/{slug}', [HomeController::class, 'categorytreatments'])->name('categorytreatments');
