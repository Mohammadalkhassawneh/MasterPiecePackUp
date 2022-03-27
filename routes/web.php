<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSellerController;
use App\Http\Controllers\ProductDetailsController;
use App\Models\Product;
use App\models\User;




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

Route::get('/admin', function () {
    $user = User::all();
    $product = Product::all();
    return view('admin.index', compact('user', 'product'));
})->name('admin')->middleware('admin');


Route::resource("/reservation", ReservationController::class);

//
Route::get('/', [HomeController::class, 'index'])->name('home2');
// Route::get('/', [CategoryController::class, 'Categories'])->name('home2');


Route::resource('/user', UserController::class);
Route::resource('/userprofile', UserProfileController::class);
Route::resource('/sell', ProductSellerController::class);



Route::get("/filter", [FilterController::class, "roles"])->name("roles");
Route::get("/search", [FilterController::class, "search"])->name("search");
Route::get("/productsellers", [ProductController::class, "index"])->name("productSeller.index");
Route::get('/seller.{id}', [ProductController::class, 'getSeller'])->name('seller');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/admin', [HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

Route::resource('/products', ProductsController::class);
Route::resource('shop', ShopController::class);
Route::get('shopCat', [ShopController::class, 'showCat'])->name('shopCat');
Route::resource('product-details', ProductDetailsController::class);
Route::resource('/categories', CategoryController::class);
Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
Route::get('/contact', [CategoryController::class, 'contact'])->name("contact");

//reservation route

Route::get('/reservations', [ReservationController::class, 'show'])->name('reservations');
Route::get('/reservation.{id}', [ReservationController::class, 'getSeller'])->name('sellerReservation');
Route::get('/reservations.{id}', [ReservationController::class, 'productFilter'])->name('productFilter');
Route::get('/deleteReservations.{id}', [ReservationController::class, 'deleteReservations'])->name('deleteReservations');