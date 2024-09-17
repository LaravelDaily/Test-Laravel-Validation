<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // ... TASK: write validation here so that "title" field
        //           would be required and unique in the "posts" DB table
        $request->validate([
            'title' => ['required', Rule::unique(Post::class, 'title')]
        ]);

        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
