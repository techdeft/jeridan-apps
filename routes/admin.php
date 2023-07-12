<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;






Route::prefix('admin')->name('admin.')->group(function () {

     Route::get('/login', [AdminController::class, 'login'])->name('login');

    //   Route::get('/about', [AdminController::class, 'about'])->name('about');

    Route::middleware('auth', 'role:Admin')->group(function () { 
        Route::get('/dashboard', [AdminController::class, 'home'])->name('home');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/users/members', [UserController::class, 'members'])->name('members');
        Route::get('/users/lawyers', [UserController::class, 'lawyers'])->name('lawyers');
        Route::get('/users/admin', [UserController::class, 'admins'])->name('admin');
    });


    // Route::get('/admin/agents', [AdminController::class, 'agents'])->name('agent');
    // Route::post('/admin/agents', [AdminController::class, 'agentsStore'])->name('add.agent');
    // Route::get('/admin/agents/{id}', [AdminController::class, 'agentsDelete'])->name('delete.agent');

   
});