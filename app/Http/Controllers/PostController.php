<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(
            ['title' => 'required|unique:posts']
        );

        // Saving the post
        Post::create($validated);

        return 'Success';
    }
}
