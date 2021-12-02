<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'The name field is required.'
            ]
        );

        if ($validator->fails()) {
            return redirect('products/create')
                ->withErrors($validator);
        }

        Product::create($validator->validated());

        return 'Success';
    }
}
