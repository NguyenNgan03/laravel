<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;




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
// Client route
Route::middleware('auth.admin')->prefix('categories')->group(function () {
    // danh sach chuyen muc
    Route::get('/', [CategoryController::class, 'index'])->name('categories.list');

    //lay chi tiet mot chuyen muc (Ap dung show forms sua chuyen muc)
    Route::get('/edit/{id}', [CategoryController::class, 'getCategory'])->name('categories.edit');

    //Xu ly update chuyen muc
    Route::post('/eidt/{id}', [CategoryController::class, 'updateCategory']);

    //Hien thi form add du lieu
    Route::get('/add', [CategoryController::class, 'addCategory'])->name('categories.add');

    //Xu ly them chuyen muc
    Route::post('/add', [CategoryController::class, 'handleAddCategory']);

    //Xoa chuyen muc
    Route::delete('delete/{id}', [CategoryController::class, 'deleteCategory']);

    //Hien thi form upload
    Route::get('/upload', [CategoryController::class, 'getFile']);
    
    //Xu ly file
    Route::post('/upload', [CategoryController::class, 'handleFile'])->name('category.upload');

});

Route::get('san-pham/{id}', [HomeController::class, 'getProductDetail']);
// Admin route
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/',[DashboardController::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('san-pham', [HomeController::class, 'products'])->name('product');
Route::get('add-product', [HomeController::class, 'getAdd']);
// Route::post('add-product', [HomeController::class, 'postAdd']);
Route::put('add-product', [HomeController::class, 'postAdd']);




