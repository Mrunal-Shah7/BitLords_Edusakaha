<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignInController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('welcome');});

Route::get('/signin',[SignInController::class,'display_sign_in']);
Route::get('/signup',[SignInController::class,'display_sign_up']);
Route::get('/index',[SignInController::class,'display_index']);

Route::post('/signup',[SignInController::class,'store_signup']);
Route::post('/signin',[SignInController::class,'store_sign_in']);























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
