<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;

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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('template', function () {
    return view('template.base');
});
Route::get('beranda', [HomeController:: class, 'ShowBeranda']);
Route::get('kategori', [HomeController:: class, 'Showkategori']);



// Route::get('produk', [ProdukController:: class, 'index']);
// Route::get('produk/create', [ProdukController:: class, 'create']);
// Route::post('produk', [ProdukController:: class, 'store']);
// Route::get('produk/{produk}', [ProdukController:: class, 'show']);
// Route::get('produk/{produk}/edit', [ProdukController:: class, 'edit']);
// Route::put('produk/{produk}', [ProdukController:: class, 'update']);
// Route::delete('produk/{produk}', [ProdukController:: class, 'destroy']);

// Route::get('/', [ClientProdukController::class, 'index']);
//     Route::get('detail/{produk}', [ClientProdukController::class, 'show']);
Route::get('shop', [ClientController::class, 'prod']);

// Route::get('user', [UserController:: class, 'index']);
// Route::get('user/create', [UserController:: class, 'create']);
// Route::post('user', [UserController:: class, 'store']);
// Route::get('user/{user}', [UserController:: class, 'show']);
// Route::get('user/{user}/edit', [UserController:: class, 'edit']);
// Route::put('user/{user}', [UserController:: class, 'update']);
// Route::delete('user/{user}', [UserController:: class, 'destroy']);

// Route::get('login', [HomeController:: class, 'ShowLogin']);
// Route::post('login', [HomeController:: class, 'LoginProcess']);
// Route::get('logout', [HomeController:: class, 'Logout']);

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'Loginprocess']);
Route::get('logout', [AuthController::class, 'Logout']);


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('produk' , ProdukController::class);
    Route::resource('user' , UserController::class);
    Route::post('produk/filter',[ProdukController::class, 'filter']);
});

Route::post('produk/filter2',[ProdukController::class, 'filter2']);