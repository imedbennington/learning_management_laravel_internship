<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class CourseController extends Controller
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
        $categories = Category::all(); // Fetch categories for the dropdown
        return view('Users Frontend Theme.add-course', compact('categories')); // Pass the variable to the view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'course_files.*' => 'file|mimes:pdf,doc,docx|max:2048',
            'images.*' => 'file|mimes:jpeg,png|max:2048',
        ]);
    
        $course = new Course();
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->category_id = $request->input('category_id');
    
        // Handle course files
        if ($request->hasFile('course_files')) {
            $filePaths = [];
            foreach ($request->file('course_files') as $file) {
                $filePaths[] = $file->store('courses', 'public');
            }
            $course->course_files = implode(',', $filePaths);
        }
    
        // Handle images
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('images', 'public');
            }
            $course->images = implode(',', $imagePaths);
        }
    
        // Set uploader_id based on user role
        if (auth()->check()) {
            $user = auth()->user();
            if ($user->hasRole('admin') || $user->hasRole('instructor')) {
                $course->uploader_id = $user->id;
            } else {
                $course->uploader_id = null; // Set to null if not an admin or instructor
            }
        } else {
            $course->uploader_id = null; // Set to null if no user is authenticated
        }
    
        $course->save();
    
        return redirect()->route('courses.create')->with('success', 'Course created successfully!');
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
