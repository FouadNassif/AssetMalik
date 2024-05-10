<?php

use App\Http\Controllers\Api\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\FavoriteItemsController;
use App\Http\Controllers\Api\ItemsController;
use App\Http\Controllers\Api\ProcessDateController;
use App\Http\Controllers\api\ReviewsController;
use Illuminate\Support\Facades\Route;

Route::post('/processDate', [ProcessDateController::class, 'AvailableDate']);

Route::post('/getItem', [ItemsController::class, 'getItem']);

Route::post('/deleteFavoriteItem', [FavoriteItemsController::class, 'deleteFavoriteItem']);
Route::post('/addFavoriteItem', [FavoriteItemsController::class, 'addFavoriteItem']);

Route::post('/likeReview', [ReviewsController::class, 'likeReview']);
Route::post('/removeLike', [ReviewsController::class, 'removeLikeReview']);