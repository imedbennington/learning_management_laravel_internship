<?php

use App\Http\Controllers\AdminController;
Route::view('/app-file-admin', 'Users Frontend Theme.app-file-manager')->name('app-file-admin');
Route::view('/admin-dashboard', 'Users Frontend Theme.index')->name('admin-dashboard');
//Route::get('/show-admin-dashboard', [AdminController::class, 'index'])->name('show-admin-dashboard');