<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class ReviewsController extends Controller
{
    public function addReview(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();

            $request->validate([
                'item_id' => 'required',
                'review' => 'required|string',
            ]);

            $reviews = $user->reviews()->create([
                'item_id' => $request->item_id,
                'review' => $request->review,
            ]);

            if($reviews){
                return redirect()->back();
            }
        }
    }
}
