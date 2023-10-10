<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\DanceClassResource;
use App\Models\DanceClass;

class DanceClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DanceClassResource::collection(DanceClass::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $danceClassName = $request->input('name');
        $danceClassStart = date('Y-m-d H:i:s', strtotime($request->input('start')));
        $danceClassEnd = date('Y-m-d H:i:s', strtotime($request->input('end')));
        $danceClassTeacherId = $request->input('teacher_id');
        $danceClassLocationId = $request->input('location_id');

        $danceClass = DanceClass::create([
            'name' => $danceClassName,
            'start' => $danceClassStart,
            'end' => $danceClassEnd,
            'teacher_id' => $danceClassTeacherId,
            'location_id' => $danceClassLocationId,
        ]);
        $danceClass->save();
        return response()->json([
            'data' => new DanceClassResource($danceClass)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(DanceClass $danceClass)
    {
        return new DanceClassResource($danceClass);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DanceClass $danceClass)
    {
        $danceClassName = $request->input('name');
        $danceClassStart = date('Y-m-d H:i:s', strtotime($request->input('start')));
        $danceClassEnd = date('Y-m-d H:i:s', strtotime($request->input('end')));
        $danceClassTeacherId = $request->input('teacher_id');
        $danceClassLocationId = $request->input('location_id');

        $danceClass->update([
            'name' => $danceClassName,
            'start' => $danceClassStart,
            'end' => $danceClassEnd,
            'teacher_id' => $danceClassTeacherId,
            'location_id' => $danceClassLocationId,
        ]);
        $danceClass->save();
        return response()->json([
            'data' => new DanceClassResource($danceClass)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DanceClass $danceClass)
    {
        $danceClass->delete();
        return response()->json(null, 204);
    }
}

