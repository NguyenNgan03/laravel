<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //action index
    public function index(){
        $title = "Hoc lap trinh web tai unicode";
        $content = "Hoc lap trinh Laravel 8.x tai Unicode";
        /*
         * [
         * 'title' => $title,
         * 'content' => $content
         * ]
         * 
         * compact('title', 'content')
         */
        // compact co chuc nang gom tat ca cac bien thanh mang 
        return view('home')->with(['title'=> $title, 'content' => $content]);//load view home.php
        // return View::make('home')->with(['title'=> $title, 'content' => $content]);

        //$contentView = view('home')->render();
        // $contentView = $contentView->render();// ban chat cua $contentView la mang
        //dd($contentView); // Can su dung Render de chuyen tu mang sang dang HTML tho 
        // su dung render de in PDF hoac excel
        // return $contentView;

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
