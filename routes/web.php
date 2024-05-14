<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ReviewsController;

Route::get('/', function () {
    return view('barber.home');
});

// Signup form Register
Route::get('/signupF', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/signup', [UserController::class, 'register']);

// Login Form Login
Route::get('/loginF', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);


Route::middleware('auth')->group(function () {
    // Booknow Form Add a book now
    Route::get('/BookNow', [AppointmentController::class, 'showBookNowForm']);
    route::post('/BookNowCheck', [AppointmentController::class, 'BookNow']);

    // Show Profile
    Route::get('/profile', [UserController::class, 'viewAppointments']);

    // Logout
    route::post('/logout', [UserController::class, 'logout'])->name("logout");

    // Show Cart
    Route::get('/cart', [UserController::class, 'showCart']);
    Route::post('/addToCart', [CartsController::class, 'addToCart']);

    // Add a review to a item
    Route::post('/addReview', [ReviewsController::class, 'addReview']);
});

// Show the Store
Route::get('/store', [ItemsController::class, 'showAllItems']);

// Search a item
Route::get('store/search', [SearchController::class, 'searchItems'])->name("search");
Route::get('store/filter', [FilterController::class, 'filterItems'])->name("filter");

Route::get('/admin/appointments', [AdminController::class, 'mainPage']);
// Show Signle Item
Route::get('/store/{id}', [ItemsController::class, 'showSingleItem']);
