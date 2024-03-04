<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //action index
    public $data = [];
    public function index(){
        $this->data['title'] = "Training programmer";
        $this->data['message'] = "Register Successfull";

       return view('clients.home', $this->data);
    }

    public function products(){
        $this->data['title'] = "Product";
       return view('clients.products', $this->data);


    }

    public function getAdd(){
        $this->data['title'] = "Add Product";

        return view('clients.add', $this->data);
    }

    public function postAdd(Request $request){
        echo "Method PUT";
        dd($request);
    }

    public function putAll(Request $request){
        dd($request);
    }

    public function getNews(){
        return 'Danh sach tin tuc';
    }
    public function getCategory($id){
        return 'Chuyen muc: '.$id;
    }
    public function getProductDetail($id){
        return view('clients.products.detail', compact('id'));
    }

    public function getArr(){
        $contentArr = [
            'name' => 'Laravel 10.x',
            'lesson' => 'Khoa hoc lap trinh Larave',
            'academy' => 'Unicode Academy'
        ];
        return $contentArr;
    }
}

