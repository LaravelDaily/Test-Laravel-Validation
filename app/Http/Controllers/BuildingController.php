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

    public function store(StoreBuildingRequest $request)
    {
        Building::create($request->validated());

        return 'Success';
    }
}
