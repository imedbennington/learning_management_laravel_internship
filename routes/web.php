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
Route::get('registration', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');

// Route to get authenticated user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// View Routes
Route::view('/sign-up', 'public_users.sign-up')->name('sign-up');
Route::view('/recover', 'recover')->name('recover');
Route::view('/cart', 'shopping-cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/error-404', 'error')->name('error-404');

// Social Authentication Routes
Route::get('/register/google', [SocialAuthController::class, 'redirectToGoogle'])->name('register.google');
Route::get('/register/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('register.facebook');
Route::get('/register/twitter', [SocialAuthController::class, 'redirectToTwitter'])->name('register.twitter');
Route::view('/for-business', 'for-business')->name('for-business');

// Default Route
Route::get('/', function () {
    return view('welcome');
});
