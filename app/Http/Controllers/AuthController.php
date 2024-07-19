<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{

    public function showRegistrationForm()
    {
        return view('public_users.index');
    }
    public function register(Request $request)
{
    // Validate the request
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'user_name' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Create the user
    $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'user_name' => $request->user_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Create a personal access token
    $token = $user->createToken('Personal Access Token')->plainTextToken;

    // Redirect with success message
    return redirect()->route('for-business')->with('success', 'Account created successfully.');

    // Alternatively, return the token in JSON response
    // return response()->json(['token' => $token], 201);
}


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!AuthController::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = AuthController::user();
        $token = $user->createToken('Personal Access Token')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
