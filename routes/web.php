<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin1Controller;

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

<<<<<<< HEAD
    Route::get('/tanaman', function () {
        return view('tanaman');
    });    

=======
Route::get('budidaya', function () { return view('budidaya'); })->middleware(['checkRole:pembeli,admin']);
>>>>>>> 8b1506b97136757521ec5ff43f8dd10a310cf058
 // route untuk halaman admin


// route::resource('/admin', AdminController::class); 
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
