<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function __construct(){
    // echo 'Product khoi dong ';
    // su dung session de check login 
   }
    public function index()
    {
        //
        return 'Danh sach san pham';
    }

    /**
     * Show the form for creating a new resource.
     */
    // hien thi form them san pham (phuong thuc GET)
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    //Xu ky them san pham (phuong thuc POST)
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // Lay ra thong tin cua mot san pham (phuong thuc GET)
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //Hien thi form sua san pham (phuong thuc GET)
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    //Xu ly sua san pham 
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // Xoa san pham 
    public function destroy(string $id)
    {
        //
    }
}
