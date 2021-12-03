<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|unique:App\Models\Post,title'
        ];
        $message = [
            'title.required' => 'a tittle is required',
            'title.unique' => 'a title must unique'
        ];
        $request->validate($rules,$message
        );

        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
