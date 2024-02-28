<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

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
// Route::get('',function(){
//     $html = '<h1>Hoc lap trinh </h1>';
//     return $html;
// });

// Route::post('unicode', function(){
//     return 'Phuong thuc post cua path /unicode';
// });

// Route::get('unicode', function(){
//     return view('form');
//     // return 'Phuong thuc get cua path /unicode';
// });

// Route::put('unicode', function(){
//     return 'Phuong thuc Put cua path /unicode';
// });

// Route::delete('unicode', function(){
//     return 'Phuong thuc delete cua path /unicode';
// });

// Route::patch('unicode', function(){
//     return 'Phuong thuc pacth cua path /unicode';
// });

// Route::match(['get', 'post'], 'unicode', function(){
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('unicode', function(Request $request){
//     $request = new Request();
//     return $request->method();
// });

// Route::get('show-form', function(){
//     return view('form');
// });

// Route::redirect('unicode', 'show-form', 301);

// Route::view('show-form', 'form');
route:: prefix('admin')->group(function(){
    Route::get('unicode', function(){
        return 'Phuong thuc get cua path /unicode';
    });
    
    Route::get('show-form', function(){
        return view('form');
    });

    Route::prefix('products')->group(function(){
        Route::get('/', function (){
            return "Danh sach san pham";
        });

        Route::get('add', function (){
            return "Them san pham";
        });

        Route::get('edit', function (){
            return "Sua san pham";
        });

        Route::get('delete', function (){
            return "Xoa san pham";
        });
    });
});

