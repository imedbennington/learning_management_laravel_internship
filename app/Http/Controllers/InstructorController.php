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
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('instructor')->attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ])) {
            // Redirect to the intended page or default route
            return redirect()->intended(route('index2'));
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    
     public function index()
    {
        return view('Users Frontend Theme.index2');
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
