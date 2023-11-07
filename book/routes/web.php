<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\PromocodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[layoutController::class,'index'])->name('home');

//Route Category
Route::get('category/list',[CategoryController::class,'index'])->name('list-category')->middleware('CheckLogout');
Route::match(['GET','POST'],'category/add',[CategoryController::class,'add'])->name('add-category')->middleware('CheckLogout');
Route::match(['GET','POST'],'category/edit/{id}',[CategoryController::class,'edit'])->name('edit-category')->middleware('CheckLogout');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('delete-category');

//Route Book
Route::get('book/list',[BookController::class,'index'])->name('list-book')->middleware('CheckLogout');
Route::match(['GET','POST'],'book/add',[BookController::class,'add'])->name('add-book')->middleware('CheckLogout');
Route::match(['GET','POST'],'book/edit/{id}',[BookController::class,'edit'])->name('edit-book')->middleware('CheckLogout');
Route::get('book/delete/{id}',[BookController::class,'delete'])->name('delete-book');

//Route user
Route::get('user/list',[UserController::class,'index'])->name('list-user');
Route::match(['GET','POST'],'user/add',[UserController::class,'add'])->name('add-user');
Route::match(['GET','POST'],'user/edit/{id}',[UserController::class,'edit'])->name('edit-user');
Route::get('user/delete/{id}',[UserController::class,'delete'])->name('delete-user');

//Route author
Route::get('author/list',[AuthorController::class,'index'])->name('list-author')->middleware('CheckLogout');
Route::match(['GET','POST'],'author/add',[AuthorController::class,'add'])->name('add-author')->middleware('CheckLogout');
Route::match(['GET','POST'],'author/edit/{id}',[AuthorController::class,'edit'])->name('edit-author')->middleware('CheckLogout');
Route::get('author/delete/{id}',[AuthorController::class,'delete'])->name('delete-author');

//Route promo code
Route::get('promo_code/list',[PromocodeController::class,'index'])->name('list-promo-code')->middleware('CheckLogout');
Route::match(['GET','POST'],'promo_code/add',[PromocodeController::class,'add'])->name('add-promo-code')->middleware('CheckLogout');
Route::match(['GET','POST'],'promo_code/edit/{id}',[PromocodeController::class,'edit'])->name('edit-promo-code')->middleware('CheckLogout');
Route::get('promo_code/delete/{id}',[PromocodeController::class,'delete'])->name('delete-promo-code');

//Route views
Route::get('views/list',[ViewController::class,'index'])->name('list-views');
Route::get('views/delete/{id}',[ViewController::class,'delete'])->name('delete-views');

// Route detail
Route::get('details/{id}',[DetailController::class,'index'])->name('detail-book');

// Route cart
Route::get('/cart',[CartController::class,'index'])->name('cart-shop');
Route::post('cart-add',[CartController::class,'add'])->name('add-to-cart');

//Route category product
Route::get('cate_book/{slug}',[CategoryController::class,'category_book'])->name('categories-book');

Route::get('/login/book',[LoginController::class,'index'])->name('login');
Route::get('register/book',[LoginController::class,'register'])->name('register');
Route::post('register/add-user',[LoginController::class,'postRegister'])->name('register-add');
Route::post('/login',[LoginController::class,'postLogin'])->name('login-home');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('CheckLogout');

Route::post('payyment/vnpay',[PaymentController::class,'vn_pay'])->name('payyment_vn_pay');
Route::get('checkout',[PaymentController::class,'checkout']);