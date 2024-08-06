<?php

namespace App\Http\Controllers;

use App\Models\RequestHistory;
use App\Models\Student;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Instructor;
use Auth;
use Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Users Frontend Theme.index');
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
    public function approveDemand($id)
{
    $demand = RequestHistory::find($id);

    if (!$demand) {
        return redirect()->back()->with('error', 'Demand not found.');
    }

    // Update the demand status
    $demand->status = 'approved';
    $demand->save();

    // Get the email from the demand
    $email = $demand->email;

    // Fetch the student by email
    $student = Student::where('email', $email)->first();

    if (!$student) {
        return redirect()->back()->with('error', 'Student not found.');
    }

    // Ensure the 'instructor' role exists with the 'student' guard
    $roleInstructor = Role::firstOrCreate([
        'name' => 'instructor',
        'guard_name' => 'student'
    ]);

    // Sync roles and permissions
    $student->syncRoles([$roleInstructor]);
    $permissionUploadCourses = Permission::firstOrCreate([
        'name' => 'upload courses',
        'guard_name' => 'student'
    ]);
    $permissionPostArticles = Permission::firstOrCreate([
        'name' => 'post articles',
        'guard_name' => 'student'
    ]);
    $student->syncPermissions([$permissionUploadCourses, $permissionPostArticles]);

    // Create instructor with the same password hash
    $instructor = Instructor::create([
        'first_name' => $student->first_name,
        'last_name' => $student->last_name,
        'user_name' => $student->user_name, // Make sure this field exists in Instructor
        'email' => $student->email,
        'password' => $student->password, // Directly copy the hash
    ]);

    // Debug: Log password hashes
    \Log::info('Student password hash: ' . $student->password);
    \Log::info('Instructor password hash: ' . $instructor->password);

    // Verify authentication
    if (!Auth::guard('student')->attempt(['email' => $student->email, 'password' => $student->password])) {
        \Log::error('Failed to authenticate student. Email: ' . $student->email);
        return redirect()->back()->with('error', 'Invalid password for the student.');
    }

    if (!Auth::guard('instructor')->attempt(['email' => $instructor->email, 'password' => $instructor->password])) {
        \Log::error('Failed to authenticate new instructor. Email: ' . $instructor->email);
        return redirect()->back()->with('error', 'Failed to authenticate new instructor with copied password.');
    }

    return redirect()->route('admin.demands')->with('success', 'Demand approved and user role and permissions updated successfully.');
}






    // Method to cancel a demand
    public function cancelDemand($id)
    {
        $demand = RequestHistory::find($id);

        if (!$demand) {
            return redirect()->back()->with('error', 'Demand not found.');
        }

        // Assuming 'status' is a field to indicate cancellation
        $demand->status = 'cancelled';
        $demand->save();

        return redirect()->route('admin.demands')->with('success', 'Demand cancelled successfully.');
    }
}
