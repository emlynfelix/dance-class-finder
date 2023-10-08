<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Style;
use App\Http\Resources\StyleResource;
use Illuminate\Http\Request;

class StylesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Style::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $styleName = $request->input('name');

        $style = Style::create([
            'name' => $styleName,
        ]);
        return response()->json([
            'data' => new StyleResource($style)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Style $style)
    {
        return new StyleResource($style);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Style $style)
    {
        $styleName = $request->input('name');

        $style->update([
            'name' => $styleName,
        ]);
        return response()->json([
            'data' => new StyleResource($style)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Style $style)
    {
        $style->delete();
        return response()->json(null, 204);
    }
}

