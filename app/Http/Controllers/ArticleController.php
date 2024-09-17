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
            // TASK: create your own validation rule called Uppercase
            // It should check whether title's first letter is uppercase
            #nejm : i used >> php artisan make:rule Uppercase
            'title' => ['required', new Uppercase()]
        ]);

        Article::create(['title' => $request->title]);
    }
}
