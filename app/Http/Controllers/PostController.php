<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        //dd('store');
        $request->validate(
            // ... TASK: write validation here so that "title" field
            [
                'title' => [
                    'required',
                    'unique:posts'
                    ]
            ]
            //           would be required and unique in the "posts" DB table
        );

        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
