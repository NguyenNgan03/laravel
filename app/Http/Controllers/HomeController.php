<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;
use  App\Rules\UpperCase;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //action index
    public $data = [];
    public function index()
    {
        $this->data['title'] = "Training programmer";
        $this->data['message'] = "Register Successfull";

        return view('clients.home', $this->data);
    }

    public function products()
    {
        $this->data['title'] = "Product";
        return view('clients.products', $this->data);
    }

    public function getAdd()
    {
        $this->data['title'] = "Add Product";
        $this->data['errorMessage'] = 'Please check your DB input! ';

        return view('clients.add', $this->data);
    }

    public function postAdd(ProductRequest $ProductRequest)
    {
        $rules = [
            'product_name' => ['required', 'min:6', function ($value, $fail){
                isUpperCase($value,'Truong :attribute khong hop le', $fail);
            }],
            'product_price' => ['required','integer', new UpperCase],
        ];

        // $messages = [
        //     'product_name.required' => 'product_name of product is required',
        //     'product_name.min' => 'product_name of product no least as :min character',
        //     'product_price.required' => 'product_price of product is required',
        //     'product_price.integer' => 'product_price of product must be Integer'
        // ];
        $messages = [
            'required' => 'The :attribute of product is required',
            'min' => 'The :attribute of product no least as :min character',
            'integer' => 'The :attribute of product must be Integer',
            // 'uppercase' => 'The :attribute phai viet hoa'

        ];
        $attribute = [
            'product_name' => 'The name of product',
            'product_price' => 'The price of product'
        ];
        $validate = Validator::make($ProductRequest->all(), $rules, $messages, $attribute);
        //$validate->validate();
        if ($validate->fails()) {
            $validate->errors()->add('msg', 'Please recheck your data');
        } else {
            return redirect()->route('product')->with('msg', 'Validate is successful');
        }
        return back()->withErrors($validate);

        // $ProductRequest->validate($rules, $message);
    }

    public function putAll(Request $request)
    {
        dd($request);
    }

    public function getNews()
    {
    return 'Danh sach tin tuc';
    }

public function getCategory($id)

    {
        return 'Chuyen muc: ' . $id;
    }
    public function getProductDetail($id)
    {
        return view('clients.products.detail', compact('id'));
    }

    public function getArr()
    {
        $contentArr = [
            'name' => 'Laravel 10.x',
            'lesson' => 'Khoa hoc lap trinh Larave',
            'academy' => 'Unicode Academy'
        ];
        return $contentArr;
    }

    // Tai anh ve
    public function downloadImage(Request $request)
    {
        if (!empty($request->image)) {
            $image = trim($request->image);
            // $fileName  = 'image.'.uniqid().'.jpg';
            $fileName = basename($image);

            // return response()->streamDownload(function() use ($image){
            //     $imageContent = file_get_contents($image);
            //     echo $imageContent;
            // },$fileName);
            return response()->download($image, $fileName);
        }
    }

    public function downloadDoc(Request $request)
    {
        if (!empty($request->file)) {
            $file = trim($request->file);
            $fileName = 'tai-lieu.' . uniqid() . '.pdf';
            $header = [
                'Content-type' => 'application/pdf'
            ];
            return response()->download($file, $fileName, $header);
        }
    }
}
