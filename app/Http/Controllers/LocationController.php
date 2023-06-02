<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        return Location::all();
    }

    public function store(LocationRequest $request)
    {
        return Location::create($request->validated());
    }

    public function show(Location $location)
    {
        return $location;
    }

    public function update(LocationRequest $request, Location $location)
    {
        $location->update($request->validated());

        return $location;
    }

    public function destroy(Location $location)
    {
        $location->delete();

        return response()->json();
    }
}
