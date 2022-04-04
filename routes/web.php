<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('penjual', function () { return view('penjual'); })->middleware(['checkRole:penjual,admin']);
Route::get('pembeli', function () { return view('pembeli'); })->middleware(['checkRole:pembeli,admin']);
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
