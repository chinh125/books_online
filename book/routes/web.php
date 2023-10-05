<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\layoutController;
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

Route::get('/',[layoutController::class,'index'])->name('layout-home');

//Route Category
Route::get('category/list',[CategoryController::class,'index'])->name('list-category');
Route::match(['GET','POST'],'category/add',[CategoryController::class,'add'])->name('add-category');
Route::match(['GET','POST'],'category/edit/{id}',[CategoryController::class,'edit'])->name('edit-category');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('delete-category');

//Route Book
Route::get('book/list',[BookController::class,'index'])->name('list-book');
Route::match(['GET','POST'],'book/add',[BookController::class,'add'])->name('add-book');
Route::match(['GET','POST'],'book/edit/{id}',[BookController::class,'edit'])->name('edit-book');
Route::get('book/delete/{id}',[BookController::class,'delete'])->name('delete-book');

Route::get('/admin',[BookController::class,'test']);