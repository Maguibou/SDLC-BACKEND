<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;
use Validator;

class AgenceController extends Controller
{
    public function index()
    {
        return Agence::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $agence = Agence::create($validatedData);

        return response()->json($agence, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agence = Agence::findOrFail($id);
        return response()->json($agence);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
        ]);

        $agence = Agence::findOrFail($id);
        $agence->update($validatedData);

        return response()->json($agence);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agence = Agence::findOrFail($id);
        $agence->delete();

        return response()->json("Delete with success", 204);
    }
}
