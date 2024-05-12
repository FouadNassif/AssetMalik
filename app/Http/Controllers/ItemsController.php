<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function showAllItems()
    {
        $items = Items::all();
        if (Auth::user()) {
            $user = Auth::user();
            $userid = $user->id;
            $favoriteItemsId = Auth::user()->favoriteItems()->pluck('items_id')->toArray();
            return view('store.store', compact('items', 'favoriteItemsId'));
        } else {
            return view('user.login');
        }
    }

    public function showSingleItem(Items $id)
    {
        $item = Items::find($id->id);
        if ($item) {
            $itemReviews = Reviews::where('item_id', $item->id)->get();
            return view('store.signleItem', compact('item', 'itemReviews'));
        } else {
            return redirect()->back()->with('error', 'Item not found.');
        }
    }
}
