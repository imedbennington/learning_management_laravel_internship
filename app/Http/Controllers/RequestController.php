<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\RequestHistory;
use Carbon\Carbon;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'student_id' => 'required|exists:students,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female',
            'phone' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'status' => 'sometimes|string|in:pending,approved,rejected',
        ]);
        $dateOfBirth = Carbon::parse($validatedData['date_of_birth'])->format('Y-m-d');
        //$validatedData['student_id'] = auth()->user()->id;

        // Create a new request
        RequestHistory::create([
            'student_id' => $validatedData['student_id'],
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'address' => $validatedData['address'],
            'email' => $validatedData['email'],
            'city' => $validatedData['city'],
            'country' => $validatedData['country'],
            'gender' => $validatedData['gender'],
            'phone' => $validatedData['phone'],
            //'date_of_birth' => $validatedData['date_of_birth'],
            'date_of_birth' => $dateOfBirth,
            'status' => $validatedData['status'] ?? 'pending', 
        ]);

        return redirect()->back()->with('success', 'Request submitted successfully.');
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
