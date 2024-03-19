<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', Rule::unique(Post::class)],
        ]);

        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
