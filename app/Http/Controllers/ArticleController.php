<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            // TASK: create your own validation rule called Uppercase
            // It should check whether title's first letter is uppercase
            'title' => ['required', 'string', new Uppercase],
        ]);
        // $validator = Validator::make($request->all(), [
        //     'title' => ['required', new Uppercase()]
        // ]);
        // if ($validator->fails()) {
        // }

        Article::create(['title' => $request->title]);
    }
}
