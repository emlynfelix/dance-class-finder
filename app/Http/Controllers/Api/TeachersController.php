<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Http\Resources\TeacherResource;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Teacher::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacherName = $request->input('name');
        $teacherContact = $request->input('contact');

        $teacher = Teacher::create([
            'name' => $teacherName,
            'contact' => $teacherContact,
        ]);
        return response()->json([
            'data' => new TeacherResource($teacher)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return new TeacherResource($teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacherName = $request->input('name');
        $teacherContact = $request->input('contact');

        $teacher->update([
            'name' => $teacherName,
            'contact' => $teacherContact,
        ]);
        return response()->json([
            'data' => new TeacherResource($teacher)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response()->json(null, 204);
    }
}

