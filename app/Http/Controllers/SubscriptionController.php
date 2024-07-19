<?php

namespace App\Http\Controllers;

use App\Models\subscription;
use Illuminate\Http\Request;
use Validator;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Subscription::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required',
            'description' => 'required|string|max:255',
            'monthlyDuration' => 'required|integer',
        ]);

        if ($validatedData->fails()) {
            return response()->json($validatedData->errors()->toJson(), 403);
        }

        $subscription = Subscription::create(array_merge($validatedData->validated()));


        return response()->json($subscription, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subscription = Subscription::findOrFail($id);
        return response()->json($subscription);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('oki');
        $validatedData =  Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|decimal|max:255',
            'description' => 'sometimes|required|string|max:255',
            'monthlyDuration' => 'sometimes|required|integer',
        ]);

        if ($validatedData->fails()) {
            return response()->json($validatedData->errors()->toJson(), 403);
        }

        $subscription = Subscription::findOrFail($id);
        $subscription->update(array_merge($validatedData->validated()));

        return response()->json($subscription);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->delete();

        return response()->json("Delete with success", 204);
    }
}
