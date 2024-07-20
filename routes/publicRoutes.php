<?php
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
Route::view('/dashboard-purchase-history', 'public_users.dashboard-purchase-history')->name('dashboard-purchase-history');
Route::view('/my-public-profile', 'public_users.student-detail')->name('my-public-profile');
Route::view('/my-edit-profile', 'public_users.dashboard-settings')->name('my-edit-profile');
Route::view('/my-home', 'public_users.index')->name('my-home');