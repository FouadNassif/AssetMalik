<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {return view('barber.home');});

Route::get('/signupF', [UserController::class, 'showRegistrationForm']);
Route::post('/signup', [UserController::class, 'register']);

Route::get('/BookNow', [AppointmentController::class, 'showBookNowForm']);
route::post('/BookNowCheck', [AppointmentController::class, 'BookNow']);

Route::get('/loginF', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/profile', [UserController::class, 'viewAppointments']);

Route::get('/guest', [AppointmentController::class, 'viewAppointments']);

route::post('/logout', [UserController::class, 'logout'])->name("logout");

Route::get('/store', [ItemsController::class, 'showAllItems']);

Route::get('store/search', [SearchController::class, 'searchItems'])->name("search");