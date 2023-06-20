<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('list',[ProductController::class,'index'])->name('list');
Route::get('add_product',[ProductController::class,'add'])->name('addProduct');
Route::post('create_product',[ProductController::class,'store'])->name('craeteProduct');
Route::get('edit_product/{id}',[ProductController::class,'edit'])->name('editProduct');
Route::post('update_product',[ProductController::class,'update'])->name('updateProduct');
Route::delete('delete_product/{id}',[ProductController::class,'delete'])->name('deleteProduct');
