<?php

namespace App\Http\Controllers;

use App\Models\RequestHistory;
use App\Models\Student;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Instructor;
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
    public function showDemands()
    {
        $demands = RequestHistory::all(); // Fetch all demands
        return view('Users Frontend Theme.admin-request-list', compact('demands'));
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
        'guard_name' => 'student' // Use the 'student' guard
    ]);

    // Sync the roles for the student using the 'student' guard
    $student->syncRoles([$roleInstructor]);

    // Ensure permissions exist with the 'student' guard and assign them
    $permissionUploadCourses = Permission::firstOrCreate([
        'name' => 'upload courses',
        'guard_name' => 'student' // Use the 'student' guard
    ]);
    $permissionPostArticles = Permission::firstOrCreate([
        'name' => 'post articles',
        'guard_name' => 'student' // Use the 'student' guard
    ]);

    $student->syncPermissions([$permissionUploadCourses, $permissionPostArticles]);

    // Copy the student data to the instructors table
    $instructor = Instructor::create([
        //'id'=>$student->id,
        'first_name' => $student->first_name,
        'last_name' => $student->last_name,
        'user_name' => $student->user_name,
        'email' => $student->email,
        'password' => Hash::make($student->password), // Hash the password
    ]);

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
