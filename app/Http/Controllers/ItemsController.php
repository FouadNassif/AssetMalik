<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Items;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function showAllItems()
    {
        // Eager load category relationship
        $items = Items::with('category')->get();
        if (Auth::user()) {
            $user = Auth::user();
            $userid = $user->id;
            $favoriteItemsId = $user->favoriteItems()->pluck('items_id')->toArray();
            return view('store.store', compact('items', 'favoriteItemsId'));
        } else {
            $favoriteItemsId = "null";
            return view('store.store', compact('items', 'favoriteItemsId'));
        }
    }

    public function showSingleItem(Items $id)
    {
        $item = Items::with('category')->find($id->id);
        if ($item) {
            $itemReviews = Reviews::where('item_id', $item->id)->orderBy('created_at', 'desc')->paginate(10);
            $reviewsCheck = Reviews::where('item_id', $item->id)->count();
            $category = $item->category;
            return view('store.singleItem', compact('reviewsCheck', 'item', 'itemReviews', 'category'));
        } else {
            return redirect()->back()->with('error', 'Item not found.');
        }
    }
}
