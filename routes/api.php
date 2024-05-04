<?php

use App\Http\Controllers\Api\ProcessDateController;
use Illuminate\Support\Facades\Route;

Route::post('/processDate', [ProcessDateController::class, 'AvailableDate']);
