<?php

use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\FeedbacksController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('homepage');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');



Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/show', [FeedbacksController::class, 'index'])->name('admin.feedback.index');
Route::patch('/admin/feedback/{id}/toggle', [FeedbacksController::class, 'toggleDisplay'])
    ->name('admin.feedback.toggle');


require __DIR__.'/auth.php';
