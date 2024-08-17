<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Admins;
use App\Events\UserRegistered;

class AuthController extends Controller
{


    public function showStudentRegistrationForm()
    {
        return view('auth.register-student');
    }

    public function showAdminRegistrationForm()
    {
        return view('Users Frontend Theme.auth-admin-basic-signup');
    }

    public function get_student()
{
    $student = auth('student')->user(); // Use 'student' guard

    if ($student) {
        // Log student information for debugging
        \Log::info('Authenticated Student:', ['id' => $student->id, 'name' => $student->first_name]);

        // Return the view with student data
        return view('public_users.dashboard-profile', compact('student'));
    } else {
        // Redirect to login page or show an error message
        return redirect()->route('loginStudent')->with('error', 'You are not authenticated.');
    }
}

public function become_teacher()
    {
        // No need to fetch the student here since middleware shares the data
        return view('public_users.become-teacher');
    }


    public function registerStudent(Request $request)
{
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'user_name' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    DB::beginTransaction();

    try {
        // Create the user (password will be hashed automatically)
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => $request->password, // Plain password
        ]);

        // Assign the 'student' role
        $user->assignRole('student');

        // Create a student entry
        Student::create([
            'id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => $user->password, // Use hashed password from User model
        ]);

        // Dispatch the UserRegistered event
        event(new UserRegistered($user));

        DB::commit();

        return redirect()->route('my-profile');
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['message' => 'Registration failed', 'error' => $e->getMessage()], 500);
    }
}

    /*
        public function registerInstructor(Request $request)
        {
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->assignRole('instructor');

            return response()->json(['message' => 'Instructor registered successfully'], 201);
        }
            */
    /*public function registerAdmin(Request $request)
    {
        // Validate the request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'accepted',
        ]);

        // Create the admin using Eloquent
        $admin = Admins::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Check if the admin was created successfully
        if ($admin) {
            // Assign a role to the newly created admin
            $admin->assignRole('admin'); // Ensure the `assignRole` method is available
        } else {
            // Handle the error (optional)
            return back()->withErrors(['error' => 'Failed to create admin']);
        }

        // Redirect or return a response
        return redirect()->route('loginAdmin');
        //return response()->json(['message' => 'Admin registered successfully'], 201);
    }
*/
public function registerAdmin(Request $request)
{
    // Validate the request
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:admins',
        'password' => 'required|string|min:8|confirmed',
        'terms' => 'accepted',
    ]);

    // Create the admin using Eloquent
    $admin = Admins::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => $request->password, // Password will be hashed by the mutator
    ]);

    if ($admin) {
        $admin->assignRole('admin');
        return redirect()->route('loginAdmin');
    } else {
        return back()->withErrors(['error' => 'Failed to create admin']);
    }
}


    public function loginStudent(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $student = Student::where('email', $request->email)->first();

    if ($student && Hash::check($request->password, $student->password)) {
        Auth::guard('student')->login($student);
        return redirect()->route('my-profile');
    }

    return back()->withErrors([
        'email' => ['The provided credentials are incorrect.'],
    ]);
}




public function loginUser(Request $request)
{
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        Auth::login($user);

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('instructor')) {
            return redirect()->route('instructor.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    }

    return back()->withErrors([
        'email' => ['The provided credentials are incorrect.'],
    ]);
}




    public function showRegistrationForm()
    {
        return view('public_users.index');
    }

    public function showLoginForm()
    {
        return view('public_users.login');
    }
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Redirect or return response
        return redirect()->route('dashboard');
    }



    public function login2(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        return redirect()->intended(route('dashboard'));
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Tokens revoked']);
    }
}
