<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
	public function store(PostRequest $request)
	{
		// Saving the post
		Post::create(['title' => $request->title]);

		return 'Success';
	}
}
