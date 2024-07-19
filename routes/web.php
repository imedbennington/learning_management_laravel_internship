<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAuthController;
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
// Route to display the registration form
// Routes for registration
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');

// Routes for authentication
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');

// Route to get authenticated user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::view('/for-business', 'public_users.for-business')->name('for-business');
Route::view('/sign-up', 'public_users.sign-up')->name('sign-up');
Route::view('/login', 'login')->name('login');
Route::view('/recover', 'recover')->name('recover');
Route::view('/cart', 'shopping-cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/error-404', 'error')->name('error-404');



Route::post('/register/google', [SocialAuthController::class, 'redirectToGoogle'])->name('register.google');
Route::post('/register/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('register.facebook');
Route::post('/register/twitter', [SocialAuthController::class, 'redirectToTwitter'])->name('register.twitter');



Route::get('/', function () {
    return view('welcome');
});
