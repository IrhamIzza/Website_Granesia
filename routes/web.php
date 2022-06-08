<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin1Controller;
use App\Http\Controllers\tanamanController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\BudidayaController;
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

Auth::routes();

Route::get('/cartbelanja', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/category/{slug}', 'HomeController@category')->name('category');
Route::get('/product/{slug}', 'HomeController@product')->name('product');

Route::get('logout','Auth\LoginController@logout');

Route::group(["middleware" => ["is_thisAdmin","auth"]],function (){
    Route::group(["namespace" => "Admin"], function (){
        Route::resource("admin-users","UsersController");
        Route::resource("admin-category","CategoryController");
        Route::resource("admin-products","ProductController");
        Route::resource("admin-orders","OrderController");
    });
});
// Route::get('budidaya', function () { return view('budidaya'); });
Route::get('home2', function () { return view('index2'); });

Route::group(['prefix' => 'basket'], function () {
    Route::get('/', 'BasketController@index')->name('basket');
    Route::post('/create', 'BasketController@create')->name('basket.create');
    Route::delete('/destroy', 'BasketController@destroy')->name('basket.destroy');
    Route::patch('/update/{rowid}', 'BasketController@update')->name('basket.update');
});
Route::prefix('tanaman')->group(function () {
    Route::get('/kaktus', [tanamanController::class,'kaktus']);
    Route::get('/oxalis', [tanamanController::class,'oxalis']);
    Route::get('/tanah', [tanamanController::class,'tanah']);
});


// Menampilkan  Media Tanam (Route Prefix)
Route::get('media', [mediaController::class, 'media']);
Route::prefix('media')->group(function () {
    Route::get('/Tanah', [MediaController::class, 'Tanah']);
    Route::get('/Arang', [MediaController::class, 'Arang']);
    Route::get('/Humus', [MediaController::class, 'Humus']);
    Route::get('/Sekam', [MediaController::class, 'Sekam']);
});
// Menampilkan  Media Tanam (Route Prefix)
Route::get('budidaya', [BudidayaController::class, 'budidaya']);
Route::prefix('budidaya')->group(function () {
    Route::get('/Oxalis', [BudidayaController::class, 'Oxalis']);
    Route::get('/Sirih-Belanda', [BudidayaController::class, 'Sirih']);
    Route::get('/Monstera-Deliciosa', [BudidayaController::class, 'Monstera']);
    Route::get('/Kuping-Gajah', [BudidayaController::class, 'Kuping']);
});

Route::get('/payment', 'PaymentController@index')->name('payment');
Route::post('/successful', 'PaymentController@pay')->name('pay');



Route::get('/orders', 'OrderController@index')->name('orders');
Route::get('/orders/{id}', 'OrderController@detail')->name('order');

Route::resource('profile', 'UserDetailController')->middleware('auth');
