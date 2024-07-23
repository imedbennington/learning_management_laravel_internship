<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\BusinesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Authentication Routes
///adminlogin

use App\Http\Controllers\AdminAuthController;

// Route to show the admin login form
Route::get('admin/login', [AdminAuthController::class, 'showAdminLoginForm'])->name('admin.login');

// Route to handle the admin login form submission
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Route to send password reset link
Route::post('admin/password/email', [AdminAuthController::class, 'sendResetLinkEmail'])->name('admin.password.email');

// Route to show password reset request form
Route::get('admin/password/reset', [AdminAuthController::class, 'showLinkRequestForm'])->name('admin.password.request');

// Route to show the admin dashboard (with authentication middleware)
Route::get('admin/dashboard', [AdminAuthController::class, 'index'])->name('admin.dashboard')->middleware('auth:admin');



Route::get('/', function () {
    return view('public_users.index');
});

Route::get('registration', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'registerStudent'])->name('register.submit');


Route::get('log_in', [AuthController::class, 'showLoginForm'])->name('log_in');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');

// Route to get authenticated user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Social Authentication Routes
Route::get('/register/google', [SocialAuthController::class, 'redirectToGoogle'])->name('register.google');
Route::get('/register/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('register.facebook');
Route::get('/register/twitter', [SocialAuthController::class, 'redirectToTwitter'])->name('register.twitter');
Route::view('/for-business', 'for-business')->name('for-business');

require __DIR__.'/publicRoutes.php';
// Default Route
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/dashboard', function () {
    return view('public_users.dashboard');
})->name('dashboard');


Route::get('register/student', [AuthController::class, 'showStudentRegistrationForm'])->name('register.student');
Route::get('register/instructor', [AuthController::class, 'showInstructorRegistrationForm'])->name('register.instructor');
Route::get('register/admin', [AuthController::class, 'showAdminRegistrationForm'])->name('register.admin');

Route::post('register/student', [AuthController::class, 'registerStudent'])->name('register.student.submit');
Route::post('register/instructor', [AuthController::class, 'registerInstructor'])->name('register.instructor.submit');
Route::post('register/admin', [AuthController::class, 'registerAdmin'])->name('register.admin.submit');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum')->name('logout.submit');



Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Admin Dashboard';
    })->name('admin.dashboard');
});

Route::middleware(['auth:sanctum', 'role:instructor'])->group(function () {
    Route::get('/instructor', function () {
        return 'Instructor Dashboard';
    })->name('instructor.dashboard');
});

Route::middleware(['auth:sanctum', 'role:student'])->group(function () {
    Route::get('/student', function () {
        return 'Student Dashboard';
    })->name('student.dashboard');
});