<?php

use App\Http\Controllers\Api\ItemsController;
use App\Http\Controllers\Api\ProcessDateController;
use Illuminate\Support\Facades\Route;

Route::post('/processDate', [ProcessDateController::class, 'AvailableDate']);

Route::post('/getItem', [ItemsController::class, 'getItem']);