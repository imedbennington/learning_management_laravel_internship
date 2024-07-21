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

Route::get('/', function () {
    return view('public_users.sign-up');
});

Route::get('registration', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');


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