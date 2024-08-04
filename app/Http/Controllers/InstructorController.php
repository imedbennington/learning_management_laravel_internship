<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Instructor;
class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showInstructorLogin()
    {
        return view('Users Frontend Theme.auth-basic-instructor-signin');
    }
    public function login(Request $request)
{
    // Validate the login form data
    $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to log the instructor in
    if (Auth::guard('instructor')->attempt([
        'email' => $validated['email'],
        'password' => $validated['password']
    ])) {
        // Redirect to intended page or default route
        return redirect()->intended('index2');
    }

    // Redirect back with an error if login fails
    return redirect()->back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}

    
     public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
