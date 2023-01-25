<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

Route::get('/', [ListingController::class, 'index']);

// LISTINGS ROUTES

// Show create listing form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Create listing
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit listing Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listing
Route::get('/listings/manage', [ListingController::class, 'manage']);

// Single Listing (Should be placed last)
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// USER ROUTES

// Show Register Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create User
Route::post('/user', [UserController::class, 'store']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/user/authenticate', [UserController::class, 'authenticate']);

// Logout
Route::post('/logout', [UserController::class, 'logout']);