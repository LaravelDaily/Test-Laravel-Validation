<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Item;

class ItemController extends Controller
{
    // TASK: generate that StoreItemRequest class
    //   with authorization returning TRUE
    //   and validation rules: name is required, and description is required
    public function store(StoreItemRequest $request)
    {
        Item::create($request->validated());

        return 'Success';
    }

}
