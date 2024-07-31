<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            
        $courses = Course::with(['category', 'uploader','students'])->get();
        return view('public_users.my-courses', compact('courses'));
        
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
 // Show the form for creating a new course
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
             'images.*' => 'required|image|mimes:jpeg,png|max:2048',
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
     
         // Set uploader_id and uploader_name based on authenticated admin
         if (auth('admin')->check()) {
             $admin = auth('admin')->user();
             $course->uploader_id = $admin->id;
             $course->uploader_first_name = $admin->first_name;
             $course->uploader_last_name = $admin->last_name;
             
             $course->uploader_type = $admin->roles->first()->name;
         } else {
             $course->uploader_id = null;
             $course->uploader_first_name = 'Unknown';
             $course->uploader_last_name = 'Unknown';
             $course->uploader_type = 'None';
         }
     
         $course->save();
     
         return redirect()->route('courses.create')->with('success', 'Course created successfully!');
     }
     
    

    /**
     * Display the specified resource.
     */

     /*
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->image = $request->file('image')->store('course_images', 'public');
        $course->category_id = $request->category_id;
        $course->uploader_id = Auth::id();
        $course->uploader_type = get_class(Auth::user());
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }
    
     public function show(Course $course)
{
    return view('public_users.course-list', compact('courses'));
}

*/
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
