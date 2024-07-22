<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

use App\Events\UserRegistered;
class AuthController extends Controller
{


    public function showStudentRegistrationForm()
    {
        return view('auth.register-student');
    }

    public function showInstructorRegistrationForm()
    {
        return view('auth.register-instructor');
    }

    public function showAdminRegistrationForm()
    {
        return view('auth.register-admin');
    }

    public function registerStudent(Request $request)
{
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    $user->assignRole('student');
    
    // Dispatch the UserRegistered event
    event(new UserRegistered($user));
    return redirect()->route('dashboard');
    //return response()->json(['message' => 'Student registered successfully'], 201);
}
/*
    public function registerInstructor(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('instructor');

        return response()->json(['message' => 'Instructor registered successfully'], 201);
    }
    public function registerAdmin(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('admin');

        return response()->json(['message' => 'Admin registered successfully'], 201);
    }
*/

public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return back()->withErrors([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    Auth::login($user); // Log in the user

    // Redirection based on role
    if ($user->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif ($user->hasRole('instructor')) {
        return redirect()->route('instructor.dashboard');
    } elseif ($user->hasRole('student')) {
        return redirect()->route('my-profile');
    }

    return redirect()->route('log_in'); // Fallback redirection
}



    public function showRegistrationForm()
    {
        return view('public_users.index');
    }

    public function showLoginForm()
    {
        return view('public_users.login');
    }
    public function register(Request $request)
{
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Create user
    $user = User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    // Redirect or return response
    return redirect()->route('dashboard');
}



public function login2(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        return redirect()->intended(route('dashboard'));
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Tokens revoked']);
    }
}
