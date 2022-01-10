<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuildingRequest;
use App\Models\Building;

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
