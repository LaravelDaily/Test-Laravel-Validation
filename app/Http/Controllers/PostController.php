<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            // ... TASK: write validation here so that "title" field
            //           would be required and unique in the "posts" DB table
            'title' => ['required', 'unique:posts']
        ]);

        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
