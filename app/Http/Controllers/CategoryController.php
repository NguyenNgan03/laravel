<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct(Request $request){
        // if ($request->is('categories')){
        //     echo '<h3>welcome to Army code!</h3>';
        // }

    }
    //Hien thi danh sach chuyen muc (phuong thuc GET)
    public function index(Request $request){
        // if (isset($_GET['id'])){
        //     echo $_GET['id'];
        // }

        // $path = $request->path();
        // echo $path;

        // $url = $request->url();

        // $fullUrl = $request->fullUrl();

        // $method = $request->method();
        // $ip = $request->ip();
        // echo "IP is ".$ip;

        // if ($request->isMethod('GET')){
        //     echo "Method GET";
        // }

        // echo $method;

        // $server = $request->server();

        // dd($server ["SERVER_PORT"]);

        // $header = $request->header("user-agent");
        // dd($header);

        // $id = $request->input("id");

        // echo $id;

        // $id = $request->input("id.*.name");
        
        // $id = $request->id;
        // $name = $request->name;

        // dd ($id);

        // dd(request()->id);
        // $name = request('name','Unicode');

        // $id =$request->query('id');
        // dd ($id);

        // $query =$request->query();
        // dd($query);

        return view('/clients/categories/list');
    }
    //Lay ra mot chuyen muc id (PT get)
    public function getCategory($id){
        return view('/clients/categories/edit');
    }
    //Cap nhat mot chuyen muc (PT post)
    public function updateCategory($id){
        return 'Submit sua chuyen muc '.$id;
    }
    //show forms them du lieu (phuong thuc GET)
    public function addCategory(Request $request){

        
        // $path = $request->path();
        // echo $path;

        $cateName = $request->old('category_name', 'Default');
        
        echo $cateName;

        return view('/clients/categories/add');
    }
    //them du lieu vao chuyen muc
    public function handleAddCategory(Request $request){
        // $allData = $request->all();

        // dd($allData);

        // if ($request->isMethod('POST')){
        //     echo "Method POST";
        // }

        // return redirect(route('categories.add'));
        // return 'Submit them chuyen muc';

        // $category = $request->query('id');

        if($request->has('category_name')){
            $category = $request->category_name;
            $request->flash();
           return redirect(route('categories.add'));
            
        }
        else{
            echo 'Dont have Category';
        }

        // dd($category);


    }
    //Xoa du lieu (phuong thuc DELETE)
    public function deleteCategory($id){
        return 'Submit xoa chuyen muc '.$id;
    }

    public function getFile(){
        return view('/clients/categories/file');
    }
    // Xu ly lay thong tin file 
    public function handleFile(Request $request){
        // $file = $request->file('photo');
       
        if ($request->hasFile('photo')){
            if ($request->photo->isValid()){
                $file = $request->photo;
                // $path = $file->path();
                $ext = $file->extension();
                // $path = $file->store('file-txt', 'local');
                // $path = $file->storeAs('file-txt','khoa-hoc.txt');

                // $fileName = $file->getClientOriginalName();

                // Doi ten file 

                $fileName = md5(uniqid()).'.'.$ext;
                dd($fileName);
            }
            else{
                return "Upload not successful";
            }
        }
        else{
            return "Please choose file";
        }
      
    }
}
