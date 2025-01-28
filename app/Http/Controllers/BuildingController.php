<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Http\Requests\BuildingCreate;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buildings_date = Building::all();
        return view('buildings.index', compact('buildings_date'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BuildingCreate $request)
    {
        $validated = $request->validated();
        Building::create($validated);
        return redirect()->route('buildings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $building_date = Building::findorFail($id);
        return view('buildings.show', compact('building_date'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $building_date = Building::findorFail($id);
        return view('buildings.edit', compact('building_date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BuildingCreate $request, string $id)
    {
        $validated      = $request->validated();
        $building_date  = Building::findorFail($id);
        $building_date->update($validated);
        return redirect()->route('buildings.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $building_date = Building::findorFail($id);
        $building_date->delete();
        return redirect()->route('buildings.index');
    }

}
