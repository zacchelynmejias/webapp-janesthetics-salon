<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route for the homepage
Route::get('/', function () {
    return view('homepage');
});

// Dashboard route with authentication and email verification middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Users index route with authentication and email verification middleware
Route::get('/users', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('users');

// Announcement route with authentication and email verification middleware
Route::get('/announcement',function () {
        return view('announcement');
    })->middleware(['auth', 'verified'])->name('announcement');

// Users add form route with authentication and email verification middleware
Route::get('/users/add', [UserController::class, 'form'])
    ->middleware(['auth', 'verified']);

// Users store route (post) with authentication and email verification middleware
Route::post('/users/add', [UserController::class, 'store'])
    ->middleware(['auth', 'verified']);

// Users update form route with authentication and email verification middleware
Route::get('/users/update/{id}', [UserController::class, 'show'])
    ->middleware(['auth', 'verified']);

// Users update route (post) with authentication and email verification middleware
Route::post('/users/update/{id}', [UserController::class, 'update'])
    ->middleware(['auth', 'verified']);

// Users delete route with authentication and email verification middleware
Route::get('/users/delete/{id}', [UserController::class, 'destroy'])
    ->middleware(['auth', 'verified']);

// Users password update form route with authentication and email verification middleware
Route::get('/users/password/{id}', [UserController::class, 'password'])
    ->middleware(['auth', 'verified']);



// Use middleware to ensure that the user is authenticated before accessing these routes
Route::middleware('auth')->group(function () {
    // Define a route for displaying the profile edit page
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Define a route for handling the profile update (HTTP PATCH request)
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Define a route for handling the profile deletion (HTTP DELETE request)
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
