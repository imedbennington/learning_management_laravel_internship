<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
// View Routes
Route::view('/sign-up', 'public_users.sign-up')->name('sign-up');
Route::view('/recover', 'public_users.recover')->name('recover');
Route::view('/my-cart', 'public_users.shopping-cart')->name('my-cart');
Route::view('/checkout', 'public_users.checkout')->name('checkout');
Route::view('/error-404', 'public_users.error')->name('error-404');
Route::view('/my-courses', 'public_users.my-courses')->name('my-courses');
//Route::view('/my-cart', 'public_users.my-cart')->name('my-cart');
Route::view('/my-wishList', 'public_users.shopping-cart')->name('my-wishList');
//Route::view('/my-cart', 'public_users.my-cart')->name('my-cart');
Route::view('/my-messages', 'public_users.dashboard-messages')->name('my-messages');
Route::view('/my-settings', 'public_users.dashboard-settings')->name('my-settings');
Route::view('/dashboard-purchase-history', 'public_users.bashboard-purchase-history')->name('dashboard-purchase-history');
Route::view('/my-public-profile', 'public_users.student-detail')->name('my-public-profile');
Route::view('/my-edit-profile', 'public_users.dashboard-settings')->name('my-edit-profile');
Route::view('/my-home', 'public_users.index')->name('my-home');
Route::view('/my-profile', 'public_users.dashboard-profile')->name('my-profile');
Route::view('/my-dashboard', 'public_users.dashboard')->name('my-dashboard');
Route::view('/my-dashbord-quiz', 'public_users.dashboard-quiz')->name('my-dashbord-quiz');
Route::view('/my-dashbord-bookMark', 'public_users.dashboard-bookmark')->name('my-dashbord-bookMark');
Route::view('/my-dashbord-erolledCourse', 'public_users.dashboard-enrolled-course')->name('my-dashbord-erolledCourse');
Route::view('/my-dashbord-reviews', 'public_users.dashboard-reviews')->name('my-dashbord-reviews');
Route::view('/my-dashbord-earnings', 'public_users.dashboard-earnings')->name('my-dashbord-earnings');
Route::view('/my-dashbord-withdraws', 'public_users.dashboard-withdraw')->name('my-dashbord-withdraws');
Route::view('/my-dashbord-submitCourse', 'public_users.dashboard-submit-course')->name('my-dashbord-submitCourse');
Route::view('/loginAdmin', 'Users Frontend Theme.auth-cover-signin')->name('loginAdmin');
Route::view('/become-teacher', 'public_users.become-a-teacher')->name('become-teacher');
Route::view('/course-list', 'public_users.course-list')->name('course-list');
Route::view('/lesson-details', 'public_users.lesson-details')->name('lesson-details');
Route::view('/course-details', 'public_users.course-details')->name('course-details');
Route::view('/shopping-cart', 'public_users.shopping-cart')->name('shopping-cart');
Route::view('/pricing-table', 'public_users.pricing-table')->name('pricing-table');
Route::view('/teacher-detail', 'public_users.teacher-detail')->name('teacher-detail');
Route::view('/request-coupon', 'public_users.request-coupon')->name('request-coupon');
Route::view('/for-business', 'public_users.for-business')->name('for-business');
Route::view('/log_in', 'public_users.login')->name('log_in');
Route::view('/register', 'public_users.sign-up')->name('register');
Route::get('/get_student', [AuthController::class, 'get_student'])
    ->middleware('auth:student') // Ensure this uses the 'student' guard
    ->name('get_student');

    Route::middleware('share.student.data')->group(function () {
        Route::get('/student/dashboard', [AuthController::class, 'get_student'])->name('student.dashboard');
        Route::get('/student/my-courses', [AuthController::class, 'get_student'])->name('student.my-courses');
        Route::get('/student/become-teacher', [AuthController::class, 'become-teacher'])->name('student.become-teacher');
        Route::get('/student/apply-coupon', [AuthController::class, 'get-student'])->name('student.apply-coupon');
    });
    Route::middleware('share.courses.data')->group(function () {
        Route::get('/student/my-courses', [CourseController::class, 'index'])->name('student.my-courses');
        // Other routes
    });
    
