<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function () {
    
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/emails', [AdminController::class, 'emails'])->name('admin.emails');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('users', [EmailController::class, 'index'])->name('users.index');
});

Route::any('/', function () {
    return view('welcome');
});
Route::get('/detail', function () {
    return view('detail');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::post('/email', [EmailController::class, 'create'])->name('email-check');
Route::post('/detail-submit', [EmailController::class, 'detailSubmit'])->name('detail-submit');
Route::post('/accept', [EmailController::class, 'acceptSubmit'])->name('accept');

require __DIR__.'/auth.php';
