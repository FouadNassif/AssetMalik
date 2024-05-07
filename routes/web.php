<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {return view('barber.home');});

// Signup form Register
Route::get('/signupF', [UserController::class, 'showRegistrationForm']);
Route::post('/signup', [UserController::class, 'register']);

// Booknow Form Add a book now
Route::get('/BookNow', [AppointmentController::class, 'showBookNowForm']);
route::post('/BookNowCheck', [AppointmentController::class, 'BookNow']);

// Login Form Login
Route::get('/loginF', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login']);

// SHow Profile
Route::get('/profile', [UserController::class, 'viewAppointments']);

// Logout
route::post('/logout', [UserController::class, 'logout'])->name("logout");

// Show the Store
Route::get('/store', [ItemsController::class, 'showAllItems']);

// Search a item
Route::get('store/search', [SearchController::class, 'searchItems'])->name("search");

// Show Signle Item
Route::get('/store/{id}', [ItemsController::class, 'showSingleItem']);
