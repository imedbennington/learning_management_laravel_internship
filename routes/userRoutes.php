<?php

use App\Http\Controllers\AdminController;
Route::view('/app-file-admin', 'Users Frontend Theme.app-file-manager')->name('app-file-admin');
Route::view('/admin-dashboard', 'Users Frontend Theme.index')->name('admin-dashboard');
Route::view('/admin-dashboard-alternate', 'Users Frontend Theme.index2')->name('admin-dashboard-alternate');
Route::view('/admin-dashboard-graphical', 'Users Frontend Theme.index3')->name('admin-dashboard-graphical');
Route::view('/app-email', 'Users Frontend Theme.app-email-box')->name('app-email');
Route::view('/chat-box', 'Users Frontend Theme.app-chat-box')->name('chat-box');
Route::view('/app-contact', 'Users Frontend Theme.app-contact-list')->name('app-contact');
Route::view('/app-to-do', 'Users Frontend Theme.app-to-do')->name('app-to-do');
Route::view('/app-invoice', 'Users Frontend Theme.app-invoice')->name('app-invoice');
Route::view('/app-fullcalender', 'Users Frontend Theme.app-fullcalender')->name('app-fullcalender');
Route::view('/component-alerts', 'Users Frontend Theme.component-alerts')->name('component-alerts');
Route::view('/component-accordions', 'Users Frontend Theme.component-accordions')->name('component-accordions');
Route::view('/component-badges', 'Users Frontend Theme.component-badges')->name('component-badges');
Route::view('/component-buttons', 'Users Frontend Theme.component-buttons')->name('component-buttons');
Route::view('/component-cards', 'Users Frontend Theme.component-cards')->name('component-cards');
Route::view('/component-carousels', 'Users Frontend Theme.component-carousels')->name('component-carousels');
Route::view('/component-list-groups', 'Users Frontend Theme.component-list-groups')->name('component-list-groups');
Route::view('/component-media-object', 'Users Frontend Theme.component-media-object')->name('component-media-object');
Route::view('/component-modals', 'Users Frontend Theme.component-modals')->name('component-modals');
Route::view('/component-navs-tabs', 'Users Frontend Theme.component-navs-tabs')->name('component-navs-tabs');
Route::view('/component-navbar', 'Users Frontend Theme.component-navbar')->name('component-navbar');
Route::view('/component-paginations', 'Users Frontend Theme.component-paginations')->name('component-paginations');
Route::view('/component-popovers-tooltips', 'Users Frontend Theme.component-popovers-tooltips')->name('component-popovers-tooltips');
Route::view('/component-progress-bars', 'Users Frontend Theme.component-progress-bars')->name('component-progress-bars');
Route::view('/component-spinners', 'Users Frontend Theme.component-spinners')->name('component-spinners');
Route::view('/component-notifications', 'Users Frontend Theme.component-notifications')->name('component-notifications');
Route::view('/form-file-upload', 'Users Frontend Theme.form-file-upload')->name('form-file-upload');
Route::view('/form-add-category', 'Users Frontend Theme.add-category')->name('form-add-category');


Route::get('/admin/demands', [AdminController::class, 'showDemands'])->name('admin.demands');
Route::post('/admin/demands/approve/{id}', [AdminController::class, 'approveDemand'])->name('admin.demands.approve');
Route::post('/admin/demands/cancel/{id}', [AdminController::class, 'cancelDemand'])->name('admin.demands.cancel');



Route::view('/form-add-category', 'Users Frontend Theme.add-category')->name('form-add-category');

// web.php or userRoutes.php
    Route::view('/teacher.details', 'Users Frontend Theme.teacher.detail')->name('teacher.details');

//Route::get('/show-admin-dashboard', [AdminController::class, 'index'])->name('show-admin-dashboard');