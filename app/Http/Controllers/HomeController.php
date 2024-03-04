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

       return view('clients.home', $this->data);
    }

    public function products(){
        $this->data['title'] = "Product";
       return view('clients.products', $this->data);


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
}
