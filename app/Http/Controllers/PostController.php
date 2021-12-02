<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(StorePostRequest $request)
    {
        $request->validate(
            // ... TASK: write validation here so that "title" field
            //           would be required and unique in the "posts" DB table
        );

        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
