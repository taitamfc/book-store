<?php

use Illuminate\Support\Facades\Route;

//admin
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;

//website
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ShopController;
use App\Http\Controllers\Website\CategoryController as WebsiteCategoryController;
use App\Http\Controllers\Website\ProductController as WebsiteProductController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CheckoutController;

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
Route::group(['prefix' => 'admin'], function()
{
    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);
    Route::resource('orders',OrderController::class);
});

// Route::get('/', function(){
//     return view('frontend.layouts.master');
// })->name('website.home');

Route::get('/', [HomeController::class,'index'])->name('website.home');
Route::get('/shop', [WebsiteProductController::class,'index'])->name('website.shop');
Route::get('/category/{slug}', [WebsiteCategoryController::class,'show'])->name('website.category');
Route::get('/product/{slug}', [WebsiteProductController::class,'show'])->name('website.product');
Route::get('/cart', [CartController::class,'index'])->name('website.cart');
Route::get('/cart-add/{id}', [CartController::class,'add'])->name('website.cart-add');
Route::get('/cart-delete/{id}', [CartController::class,'delete'])->name('website.cart-delete');
Route::post('/cart-update', [CartController::class,'update'])->name('website.cart-update');
Route::get('/checkout', [CheckoutController::class,'index'])->name('website.checkout');
Route::post('/do-checkout', [CheckoutController::class,'doCheckout'])->name('website.do-checkout');
Route::get('/success/{id?}', [CheckoutController::class,'success'])->name('website.success');

Route::get('/login', [UserController::class,'login'])->name('website.login');
Route::get('/register', [UserController::class,'register'])->name('website.register');

Route::post('/postLogin', [UserController::class,'postLogin'])->name('website.postLogin');
Route::post('/postRegister', [UserController::class,'postRegister'])->name('website.postRegister');