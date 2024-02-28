<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
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
// Route::get('/',function(){
//     $html = '<h1>Hoc lap trinh </h1>';
//     return $html;
// });

// Route::post('unicode', function(){
//     return 'Phuong thuc post cua path /unicode';
// });

Route::get('unicode', function(){
    return view('form');
    // return 'Phuong thuc get cua path /unicode';
});

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
Route::get ('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get ('/tin-tuc', 'HomeController@getNews')->name('news');

Route::get('/chuyen-muc/{id}', [HomeController::class,'getCategory']);

Route::get('/', function(){
    return view('home');
})->name('home');

Route:: prefix('admin')->group(function(){
    Route::get('tin-tuc/{id?}/{slug?}.html', function($id=null, $slug=null ){
        $content = 'Phuong thuc get cua path /unicode voi tham so ';
        $content.='id = '.$id .'<br>';
        $content.='slug = '.$slug;
        return $content;
    })->where(
        //validate cho bien trong URL
        [
            'slug'=>'.+',
            'id'=>'[0-9]+'
        ]
    )->name('admin.tintuc');
    
    Route::get('show-form', function(){
        return view('form');
    })->name('admin.show-form');

    Route::prefix('products')->middleware('checkpermission')->group(function(){
        Route::get('/', function (){
            return "Danh sach san pham";
        });

        Route::get('add', function (){
            return "Them san pham";
        })->name('admin.products.add');

        Route::get('edit', function (){
            return "Sua san pham";
        });

        Route::get('delete', function (){
            return "Xoa san pham";
        });
    });
});

