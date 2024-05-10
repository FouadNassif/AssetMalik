<?php

namespace App\Http\Controllers\api;

use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    public function likeReview(Request $request)
    {
        $requestData = $request->json()->all();
        $reviewId = $requestData['review_id'];
        $review = Reviews::findOrFail($reviewId);
        $review->likes += 1;
        $review->save();
        if ($review) {
            return response()->json([
                'success' => 'true',
                'likes' => $review->likes,
            ]);
        }
    }

    public function removeLikeReview(Request $request){
        $requestData = $request->json()->all();
        $reviewId = $requestData['review_id'];
        $review = Reviews::findOrFail($reviewId);
        $review->likes -= 1;
        $review->save();
        if ($review) {
            return response()->json([
                'success' => 'true',
                'likes' => $review->likes,
            ]);
        }
    }
}
