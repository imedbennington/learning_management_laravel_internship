<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
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
    $categories = Category::all(); // Fetch categories
    return view('Users Frontend Theme.add-category', compact('categories')); // Pass categories to the view
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Check if the category already exists
    $existingCategory = Category::where('name', $request->input('name'))->first();

    if ($existingCategory) {
        // Redirect back with an error message if the category already exists
        return redirect()->route('categories.create')->with('error', 'Category already exists!');
    }

    // Create the new category
    Category::create([
        'name' => $request->input('name'),
    ]);

    // Redirect with a success message
    return redirect()->route('categories.create')->with('success', 'Category created successfully!');
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
