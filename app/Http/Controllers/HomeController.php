<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //action index
    public function index(){
        return view('Home');
    }

    public function getNews(){
        return 'Danh sach tin tuc';
    }
    public function getCategory($id){
        return 'Chuyen muc: '.$id;
    }
}
