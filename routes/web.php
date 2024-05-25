<?php

use App\Http\Controllers\CetizenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function(){
//     return inertia('Landing');
// });
// Route::get('/', function(){
//     return inertia('Landing');
// });

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/landing', function () {
//     return Inertia::render('Landing');
// })->

Route::resource('/citizens', CetizenController::class);

Route::match(['get', 'post'], '/Citizens', [CetizenController::class, 'store']);
Route::get('/Citizens', [CetizenController::class, 'index']);

Route::resource('/cetizen', CetizenController::class);
Route::post('/Citizens', [CetizenController::class, 'store']);
Route::post('/citizens', [CetizenController::class, 'store']);
Route::get('/create', [CetizenController::class, 'create'])->name('cetizen.create');
Route::post('/cetizen', [CetizenController::class, 'store'])->name('cetizen.store');
Route::get('/citizens', [CetizenController::class, 'index'])->name('citizens.index');

Route::get('/Citizens/{id}/edit', [CetizenController::class, 'edit'])->name('cetizen.edit');
Route::put('/Citizens/{id}', [CetizenController::class, 'update']);
Route::delete('/cetizen/{id}', [CetizenController::class, 'destroy'])->name('cetizen.destroy');
Route::put('/citizens/{id}', [CetizenController::class, 'update'])->name('citizen.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
