<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
    public function attributes()
    {
        return [
            'product_name' => 'Name of the product',
            'product_price' => 'Price of the product'
        ];
    }

    protected function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->count() > 0) {
                $validator->errors()->add('msg', 'Have Error. Please recheck your system');
            }
        });
    }

    public function prepareForValidation()
    {
        $this->merge([
            'create_at' => date('Y-m-d H:i:s')
        ]);
    }
    protected function failedAuthorization()
    {
        // throw new AuthorizationException("You dont have allow to access");
        // throw new HttpResponseException(redirect('/')->with('msg', 'Ban Khong co quyen truy cap')->with('type','danger'));

        throw new HttpResponseException(abort(404));
    }
}
