<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/services/asset-management', function () { return view('asset'); })->name('asset');
Route::get('/services/commercial-hospitality', function () { return view('hospitality'); })->name('hospitality');
Route::get('/services/electrical-safety-testing', function () { return view('electrical'); })->name('electrical');
Route::get('/services/workspace-management', function () { return view('workspace'); })->name('workspace');
Route::get('/services/security-services', function () { return view('security'); })->name('security');
Route::get('/services/operational-services', function () { return view('operational'); })->name('operational');
Route::get('/services/infection-control', function () { return view('infection'); })->name('infection');
Route::get('/services/commercial-cleaning', function () { return view('cleaning'); })->name('cleaning');
Route::get('/innovation', function () { return view('innovation'); })->name('innovation');
Route::get('/contact', function () { return view('contact'); })->name('contact');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
