<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //action index
    public $data = [];
    public function index(){
        $this->data['welcome'] = 'Learn coding <b>UNICODE</b> ';
        $this->data['content'] = '<h3>Topic 1: The World in your eyes </h3>
        <p>Topic 1</p>
        <p>Topic 2</p>
        <p>Topic 3</p>';

        $this->data['index'] = 1;

        $this->data['dataArr'] = [
            // 'Group 1',
            // 'Group 2',
            // 'Group 3'
        ];

        $this->data['number'] = 1;

       return view('home', $this->data);
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
