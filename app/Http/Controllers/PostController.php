<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            ['title' => 'required|unique:posts,title']
        );

        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
