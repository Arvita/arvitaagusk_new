<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\SupervisedController;
use App\Http\Controllers\Admin\PortofolioController;
use App\Http\Controllers\Admin\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index']);
// Route::get('/home', function() {
//     $publications = DB::table('publications')->get();
//     return view('frontend.home', compact('publications'));
// });
Route::get('/microsoft',[HomeController::class, 'microsoft'])->name('download');
Route::view('/dashboard', 'Admin.dashboard')->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/publication', PublicationController::class)->middleware(['auth', 'verified']);
Route::resource('/supervised', SupervisedController::class)->middleware(['auth', 'verified']);
Route::resource('/portofolio', PortofolioController::class)->middleware(['auth', 'verified']);
Route::resource('/course', CourseController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';