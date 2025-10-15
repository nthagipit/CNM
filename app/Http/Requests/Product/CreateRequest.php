<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\BaseRequest;

class CreateRequest extends BaseRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name is string',
            'name.max' => 'Name must be less than 255 characters',
            'description.required' => 'Description is required',
            'description.string' => 'Description is string',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be number'
        ];
    }
}
