<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\BusinesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoupnsController;
use App\Http\Controllers\RequestController;
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
require __DIR__.'/userRoutes.php';
require __DIR__.'/publicRoutes.php';
require __DIR__.'/CourseRoutes.php';
require __DIR__.'/RequestHistoryRoutes.php';
// Route to show the form for creating a new course
Route::get('form-add-course', [CourseController::class, 'create'])->name('courses.create');

// Route to handle the form submission for storing a new course
Route::post('courses', [CourseController::class, 'store'])->name('courses.store');

// Route to show the form for creating a new category
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Route to handle the form submission for storing a new category
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');


// Route to show the admin login form
Route::get('admin/login', [AdminAuthController::class, 'showAdminLoginForm'])->name('admin.login');

// Route to handle the admin login form submission
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Route to send password reset link
Route::post('admin/password/email', [AdminAuthController::class, 'sendResetLinkEmail'])->name('admin.password.email');

// Route to show password reset request form
Route::get('admin/password/reset', [AdminAuthController::class, 'showLinkRequestForm'])->name('admin.password.request');

// Route to show the admin dashboard (with authentication middleware)
//Route::get('admin/dashboard', [AdminAuthController::class, 'index'])->name('admin.dashboard')->middleware('auth:admin');
Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->middleware('auth:admin')->name('admin-dashboard');



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


// Default Route
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/dashboard', function () {
    return view('public_users.dashboard');
})->name('dashboard');


Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/fileManager', [AdminAuthController::class, 'app-file-manager'])->name('app-file-manager');
    Route::get('admin/uploadFile', [AdminAuthController::class, 'add-course'])->name('add-course');
});

//Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->middleware('auth:admin');



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


Route::post('/login/student', [AuthController::class, 'loginStudent'])->name('login.student');
Route::post('/login/user', [AuthController::class, 'loginUser'])->name('login.user');

Route::post('/request-coupon', [CoupnsController::class, 'create'])->name('coupons.request');

Route::middleware(['share.demand.data'])->group(function () {
    Route::get('/demandlist', [RequestController::class, 'index'])->name('demandlist');
});
