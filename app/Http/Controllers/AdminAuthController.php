<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminAuthController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
        // Optional: Log for debugging
        \Log::info('Admin logged in:', ['email' => $request->email]);

        return redirect()->intended('admin/dashboard'); // Redirect to admin dashboard
    }

    // Optional: Log for debugging
    \Log::warning('Login failed:', ['email' => $request->email]);

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput($request->only('email', 'remember'));
}


    public function dashboard()
{
    $admin = auth('admin')->user(); // Get the currently authenticated admin

    if ($admin) {
        return view('Users Frontend Theme.index', compact('admin'));
    } else {
        // Optionally, you can redirect to a login page or show an error message
        return redirect()->route('loginAdmin')->with('error', 'You are not authenticated.');
    }
}

    public function showAdminLoginForm()
    {
        return view('Users Frontend Theme.auth-cover-signin');
    }
}
