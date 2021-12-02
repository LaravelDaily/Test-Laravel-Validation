<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(StorePostRequest $request)
    {
        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
