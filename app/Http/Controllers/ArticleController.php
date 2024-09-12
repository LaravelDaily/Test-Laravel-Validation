<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Rules\Uppercase;
use App\Rules\UppercaseRule;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            // TASK: create your own validation rule called Uppercase
            // It should check whether title's first letter is uppercase
            'title' => ['required', new UppercaseRule()]
        ]);

        Article::create(['title' => $request->title]);
    }
}
