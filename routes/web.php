<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\TouchController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\LanguageController;
use App\Http\Controllers\Dashboard\ProducerController;
use App\Http\Controllers\Dashboard\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------s---------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['register' => false]);
//home page
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::post('/touchcontacts', [HomeController::class, 'store'])->name('wesite.touch');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // route HomeController
    Route::get('/', function () {
        return view('dashboard/welcome');
    });
    Route::get('', [DashboardController::class, 'dashboard'])->name('admin.home');
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('admin.home');
    Route::get('/lang/{lang}', [DashboardController::class, 'lang'])->name('admin.lang');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.home');
    // route HomeController

    // route languages
    Route::resource('languages', LanguageController::class);
    // route languages

    // route UserController
    Route::resource('users', UserController::class);
    Route::get('profileuser/{id}', [UserController::class, 'profileuser'])->name('profileuser');
    Route::any('updateuser/{id}', [UserController::class, 'updateuser'])->name('updateuser');

    // route sittings
    Route::resource('settings', SettingController::class)->except(['show', 'store']);
    // route sittings


    // route products
    Route::resource('products', ProducerController::class);
    Route::get('productpublic/{id}', [ProducerController::class, 'changpublic_unpublic'])->name('productpublic');
    // route products

    // route touchs
    Route::resource('touchs', TouchController::class);
    Route::get('export/', [TouchController::class, 'export'])->name('admin.export'); //  route laravel 8
    // route touchs


    // 404 not found route
    // lear-cache route
    Route::get('/clear-cache', function () {
        // Artisan::call('route:cache');
        Artisan::call('route:clear');
        // dd("hree");
        Artisan::call('view:clear');
        Artisan::call('view:cache');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('config:clear');
        Artisan::call('storage:link');
        return redirect()->back()->with('toast_success', __('clear cache Successfully'));
    })->name('clear_cache');
    // lear-cache route

});

// 404 not found route
Route::fallback(function () {
    $settings = Setting::first();
    return view('dashboard.404', compact('settings'));
});
    // end route dashboard//
// end dashboard
