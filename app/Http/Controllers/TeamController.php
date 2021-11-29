<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return redirect('teams/create')
                ->withInput()
                ->withErrors($validator);
        }

        Team::create($validator->validated());

        return 'Success';
    }
}
