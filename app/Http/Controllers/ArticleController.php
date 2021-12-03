<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', new Uppercase()]
        ]);

        Article::create(['title' => $request->title]);
    }
}
