<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', [UserController::class, 'login'])->name('home');
Route::get('/dasbord', [UserController::class, 'dasbord'])->name('home');
Route::post('/auth', [UserController::class, 'auth'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dasbord', function(){
    return view('dasbord');
})->name('dasbord');
Route::controller(ProductController::class)->prefix('product')->group(function(){
    Route::get('', 'index')->name('product');
    Route::get('insert', 'add')->name('product.insert');
    // Route::get('update', 'edit')->name('product.update');
    Route::post('insert', 'insert')->name('product.add.insert');
    // Route::post('update', 'update')->name('product.edit.insert');
    // Route::put('/product/{id}', 'ProductController@update')->name('product.update');
});
Route::get('/delete{id}',[ProductController::class,'delete']);
Route::get('/viewedit{id}',[ProductController::class,'viewedit']);
Route::post('/edit{id}',[ProductController::class,'edit']);
Route::get('/logout',[ProductController::class,'logout']);

// Route::controller(ProductController::class)->prefix('products')->group(function () {
//     Route::get('', 'index')->name('products');
//     Route::get('create', 'create')->name('products.create');
//     Route::post('store', 'store')->name('products.store');
//     Route::get('show/{id}', 'show')->name('products.show');
//     Route::get('edit/{id}', 'edit')->name('products.edit');
//     Route::put('edit/{id}', 'update')->name('products.update');
//     Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
// });

