<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\BusinesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoupnsController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PostController;
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

// Public Routes
Route::get('/', function () {
    return view('public_users.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('public_users.dashboard');
})->name('dashboard');

// Authentication Routes
// Admin Authentication Routes
Route::get('admin/login', [AdminAuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin/password/email', [AdminAuthController::class, 'sendResetLinkEmail'])->name('admin.password.email');
Route::get('admin/password/reset', [AdminAuthController::class, 'showLinkRequestForm'])->name('admin.password.request');

// User Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum')->name('logout.submit');

// Student Authentication Routes
Route::get('register/student', [AuthController::class, 'showStudentRegistrationForm'])->name('register.student');
Route::post('register/student', [AuthController::class, 'registerStudent'])->name('register.submit');
Route::post('/login/student', [AuthController::class, 'loginStudent'])->name('login.student');

// Admin Registration Routes
Route::get('register/admin', [AuthController::class, 'showAdminRegistrationForm'])->name('register.admin');
Route::post('register/admin', [AuthController::class, 'registerAdmin'])->name('register.admin.submit');

// Instructor Authentication Routes
Route::get('getInstructorLogin', [InstructorController::class, 'showInstructorLogin'])->name('login.instructor');
Route::post('instructor/login', [InstructorController::class, 'login'])->name('login.instructor.submit');

// Social Authentication Routes
Route::get('/register/google', [SocialAuthController::class, 'redirectToGoogle'])->name('register.google');
Route::get('/register/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('register.facebook');
Route::get('/register/twitter', [SocialAuthController::class, 'redirectToTwitter'])->name('register.twitter');

// Course and Category Routes
Route::get('form-add-course', [CourseController::class, 'create'])->name('courses.create');
Route::post('courses', [CourseController::class, 'store'])->name('courses.store');

Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');

// Admin Protected Routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminAuthController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/fileManager', [AdminAuthController::class, 'appFileManager'])->name('app-file-manager');
    Route::get('admin/uploadFile', [AdminAuthController::class, 'addCourse'])->name('add-course');
});

// Instructor and Student Protected Routes
Route::middleware(['auth:sanctum', 'role:instructor'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/instructor', function () {
        return 'Instructor Dashboard';
    })->name('instructor.dashboard');
});

Route::middleware(['auth:sanctum', 'role:student'])->group(function () {
    Route::get('/student', function () {
        return 'Student Dashboard';
    })->name('student.dashboard');
});

// Coupons Route
Route::post('/request-coupon', [CoupnsController::class, 'create'])->name('coupons.request');

// Demand List Route with Middleware
Route::middleware(['share.demand.data'])->group(function () {
    Route::get('/demandlist', [RequestController::class, 'index'])->name('demandlist');
});

Route::middleware(['share.data'])->group(function () {
    Route::get('instructor/dashboard', [InstructorController::class, 'index'])->name('instructor.dashboard');
});

