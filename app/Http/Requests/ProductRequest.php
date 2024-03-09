<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    //Chua cac rule can validate 
    public function rules(): array
    {
        return [
            'product_name' => 'required|min:6',
            'product_price' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'product_name.required' => 'The :attribute of product is required',
            'product_name.min' => 'The :attribute of product no least as :min character',
            'product_price.required' => 'The :attribute of product is required',
            'product_price.integer' => 'The :attribute of product must be Integer'
        ];
    }
//Thay doi truong cho bang 
    public function attributes(){
        return [
            'product_name'=>'Name of the product',
            'product_price'=>'Price of the product'
        ];
    }
}
