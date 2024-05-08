<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingRequest;
use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuildingController extends Controller
{
    public function create()
    {
        return view('buildings.create');
    }

    // TASK: Customize the validation error message to say "Please enter the name"
    public function store(StoreBuildingRequest $request)
    {
        Building::create($request->validated());

        return 'Success';
    }
}
