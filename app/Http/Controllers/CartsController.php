<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartsController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'item_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Create cart for the user
        $cart = $user->cart()->create([
            'user_id' => $user->id,
            'item_id' => $request->item_id,
            'totalPrice' => $request->quantity * $request->price,
            'quantity' => $request->quantity,
        ]);

        if ($cart) {
            return redirect('/cart')->with('BookNow_success', 'Book Now Success');
        } else {
            return redirect('/')->with('error', 'Failed to add to cart');
        }
    }
    public function showCart(){
        if(Auth::check()){
            
            $cart = Auth::user()->cart()->get();
        }
        return view('user.cart', compact('cart'));
    }
}
