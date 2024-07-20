<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("auth:api", ['except' => ['login', 'register']]);
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'type' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 403);
        }

        $user = User::create(
            array_merge(
                $validator->validated(),
                ['password' => bcrypt($request->password)]
            )
        );

        return response()->json([
            'message' => 'Compte créé avec succès',
            'user' => $user
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|unique:users',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 403);
        }
        $user = User::findOrFail($id);

        $user->first_name=$request->first_name;
        dd($user);


        return response()->json([
            'message' => 'Compte créé avec succès',
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 422);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            # code...
            return response()->json(['error' => 'Non autorisé'], 401);
        }

        return $this->createNewToken($token);

    }

    public function createNewToken($token)
    {
        return response()->json([
            'acces_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }


    public function profile()
    {
        return response()->json(auth()->user(), 200);
    }

    public function logout()
    {
        auth()->logout();
        return response()->json([
            'message' => 'utilisateur déconnecté avec succès',
        ], 201);
    }
}
