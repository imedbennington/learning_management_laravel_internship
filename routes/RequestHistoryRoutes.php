<?php
use App\Http\Controllers\RequestController;
//Route::view('/become-teacher', 'public_users.become-a-teacher')->name('become-teacher');
Route::post('requests', [RequestController::class, 'store'])->name('requests.store');