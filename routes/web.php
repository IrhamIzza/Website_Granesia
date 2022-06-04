<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin1Controller;
use App\Http\Controllers\tanamanController;
use App\Http\Controllers\Belanja2Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;

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



// Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('penjual', function () { return view('penjual.index'); })->middleware(['checkRole:penjual,admin']);
Route::get('pembeli', function () { return view('index'); })->middleware(['checkRole:pembeli,admin']);


Route::group(['middleware' => ['checkRole:admin']], function(){
    Route::get('/admin', [Admin1Controller::class,'dashboard']);
    Route::prefix('admin')->group(function () {
        Route::get('/tables', [Admin1Controller::class,'tabel']);
        Route::get('/billing', [Admin1Controller::class,'billing']);
        Route::get('/profile', [Admin1Controller::class,'profile']);
    });
});

Route::group(['middleware' => ['checkRole:pembeli,admin']], function(){
    Route::get('/tanaman', [tanamanController::class,'tanaman']);
    Route::prefix('tanaman')->group(function () {
        Route::get('/kaktus', [tanamanController::class,'kaktus']);
        Route::get('/oxalis', [tanamanController::class,'oxalis']);
        Route::get('/tanah', [tanamanController::class,'tanah']);
    });
});

Route::get('belanja', function () { return view('belanja'); })->middleware(['checkRole:pembeli,admin']);
    
Route::get('belanja2', [Belanja2Controller::class,'belanja2']);
Route::post('/tambahkeranjang/{id}', [Belanja2Controller::class,'tambahkeranjang']);

Route::get('cart', [CartController::class,'cart']);
Route::get('order', [OrderController::class,'order']);
Route::post('/orderdetail/{id}', [OrderDetailController::class,'orderdetail']);



Route::get('media', function () { return view('mediatanam'); })->middleware(['checkRole:pembeli,admin']);
Route::get('belanja', function () { return view('belanja'); })->middleware(['checkRole:pembeli,admin']);
Route::get('budidaya', function () { return view('budidaya'); })->middleware(['checkRole:pembeli,admin']);


// route::resource('/admin', AdminController::class); 
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
