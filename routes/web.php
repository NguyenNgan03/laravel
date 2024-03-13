<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyOontroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;
use Illuminate\Http\Response;
use Illuminate\Mail\Mailables\Content;
use PhpParser\Node\Stmt\Return_;

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
// client route
// Route::get('/', [HomeController::class,'index'])->name('home');
// Route::prefix('category')->group(function () {
//     // Danh sách chuyên mục
//     Route::get('/', [CategoryController::class, 'index'])->name('category.list');

//     Route::get('/edit/{id}', [CategoryController::class, 'getCategory'])->name('category.edit');;

//     Route::post('', [CategoryController::class, 'updateCategory']);

//     Route::get('/add', [CategoryController::class, 'addCategory'])->name('category.add');

//     Route::post('/add', [CategoryController::class, 'showCategory']);

//     Route::delete('/delete/{id}', [CategoryController::class, 'deleteCategory']);

//     Route::post("/upload", [CategoryController::class, 'Handlefile'])->name('category.file');
//     Route::get("/upload", [CategoryController::class, 'getFile']);
// });

// Route::middleware('autho.admin')->prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::resource('products', ProductsController::class)->middleware('auth.admin');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sanpham', [HomeController::class, 'products'])->name('product');
Route::get('/them-san-pham', [HomeController::class, 'getAdd']);
Route::post('/them-san-pham',[HomeController::class,'postAdd'])->name('post-add');
Route::put('/them-san-pham', [HomeController::class, 'putAdd']);


Route::get('lay-thong-tin', [HomeController::class, 'getArray']);
Route::get('/demo-response', function () {

  return view('client.demo-test');

})->name('demo-response');
Route::post('demo-response',function(Request $request){
    if(!empty($request->username)){

         return back()->withInput()->with('mess','validate không thành công');
    };
     return  redirect(route('demo-response'))->with('mess','validate không thành công');
});
Route::get('download-image/{link}',[HomeController::class, 'downloadImg'])->name('downImg');

Route::prefix('/users')->name('users.')->group(function(){
     Route::get('/',[UserController::class,'index'])->name('index');
     Route::get('/add',[UserController::class,'add'])->name('add');
     Route::post('/add',[UserController::class,'postAdd'])->name('post-add');
     Route::get('/edit/{id}',[UserController::class,'getEdit'])->name('edit');
     Route::post('/update',[UserController::class,'postEdit'])->name('post-edit');
     Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');
});
