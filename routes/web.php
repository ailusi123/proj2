<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('/detail_product', function () {
    return view('detail_product');
});

Route::get('/template', function () {
    return view('template');
});
// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route:post('/beranda', function () {
    return view('beranda');
});

Route::get('product',[ProductController::class,'show']);
Route::get('/product/add',[ProductController::class,'add']);
Route::post('/product/create',[ProductController::class,'create']);
Route::get('/product/hapus/{id}',[ProductController::class,'hapus']);
Route::get('/product/edit/{id}',[ProductController::class,'edit']);
Route::post('/product/update/{id}',[ProductController::class,'update']);

Route::get('/beranda',[BarangController::class,'show']);
Route::get('product/detail/{id}',[BarangController::class,'detail']);

Route::get('register',[MemberController::class,'register']);
Route::post('register',[MemberController::class,'create']);

Route::get('register/user',[UserController::class,'register_user']);
Route::post('register/user',[UserController::class,'create']);

Route::get('login/user',[AuthController::class,'login_user']);
Route::post('login/user',[AuthController::class,'auth']);
Route::get('login/user',[AuthController::class,'logout_user']);

