<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct(){

    }
    //Hien thi danh sach chuyen muc (phuong thuc GET)
    public function index(){
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
    public function addCategory(){
        return view('/clients/categories/add');
    }
    //them du lieu vao chuyen muc
    public function handleAddCategory(){
        return redirect(route('categories.add'));
        // return 'Submit them chuyen muc';
    }
    //Xoa du lieu (phuong thuc DELETE)
    public function deleteCategory($id){
        return 'Submit xoa chuyen muc '.$id;
    }
}
