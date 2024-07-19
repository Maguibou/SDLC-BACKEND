<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionUser;
use Illuminate\Http\Request;

class SubscriptionUserController extends Controller
{
    public function index()
    {
        $subscriptionUsers = SubscriptionUser::all();
        return response()->json($subscriptionUsers);
    }

    public function show($id)
    {
        $subscriptionUser = SubscriptionUser::findOrFail($id);
        return response()->json($subscriptionUser);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'subscriptions_id' => 'required|exists:subscriptions,id',
        ]);

        $subscriptionUser = SubscriptionUser::create($request->all());
        return response()->json($subscriptionUser, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'subscriptions_id' => 'required|exists:subscriptions,id',
        ]);

        $subscriptionUser = SubscriptionUser::findOrFail($id);
        $subscriptionUser->update($request->all());
        return response()->json($subscriptionUser);
    }

    public function destroy($id)
    {
        $subscriptionUser = SubscriptionUser::findOrFail($id);
        $subscriptionUser->delete();
        return response()->json(null, 204);
    }
}
