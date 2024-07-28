<?php
use App\Http\Controllers\CourseController;
Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');

// Route to handle the form submission
Route::post('courses', [CourseController::class, 'store'])->name('courses.store');

Route::get('/courses-list', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');