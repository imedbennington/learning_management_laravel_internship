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

        if (Auth::guard('admins')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended('admin/dashboard'); // Redirect to admin dashboard
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email', 'remember'));
    }
    public function showAdminLoginForm()
    {
        return view('Users Frontend Theme.index');
    }
}
