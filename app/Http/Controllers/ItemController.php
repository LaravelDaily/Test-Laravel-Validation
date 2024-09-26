<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Item;

class ItemController extends Controller
{
    public function store(StoreItemRequest $request)
    {
        Item::create($request->validated());

        return 'Success';
    }

}
