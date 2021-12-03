<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate(
            // ... TASK: write validation here so that "title" field
            //           would be required and unique in the "posts" DB table
            [
                'title' => ['required', 'unique:posts']
            ]
        );

        // Saving the post
        Post::create($data);

        return 'Success';
    }
}
