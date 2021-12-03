<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ], [
            'title.required' => 'The name field is required.'
        ]);

        if ($validator->fails()) {
            return redirect('projects/create')
                ->withErrors($validator);
        }

        Project::create($validator->validated());

        return 'Success';
    }
}
