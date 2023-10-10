<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Http\Resources\LocationResource;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Location::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $locationName = $request->input('name');
        $locationLatitude = $request->input('latitude');
        $locationLongitude = $request->input('longitude');

        $location = Location::create([
            'name' => $locationName,
            'latitude' => $locationLatitude,
            'longitude' => $locationLongitude,
        ]);
        $location->save();
        return response()->json([
            'data' => new LocationResource($location)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return new LocationResource($location);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $locationName = $request->input('name');
        $locationLatitude = $request->input('latitude');
        $locationLongitude = $request->input('longitude');

        $location->update([
            'name' => $locationName,
            'latitude' => $locationLatitude,
            'longitude' => $locationLongitude,
        ]);
        $location->save();
        return response()->json([
            'data' => new LocationResource($location)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return response()->json(null, 204);
    }
}

