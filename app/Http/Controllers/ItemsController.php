<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function showAllItems()
    {
        $items = Items::all();
        if(Auth::user()){
            $user = Auth::user();
            $userid = $user->id;
            $favoriteItemsId = Auth::user()->favoriteItems()->pluck('items_id')->toArray();
        }
        return view('store.store', compact('items', 'favoriteItemsId'));
    }

    public function showSingleItem(Items $id)
    {
        $item = Items::find($id->getAttribute('id'));
        if ($item) {
            return view('store.signleItem', compact('item'));
        }
    }

    public function addToCart(Request $request){
        
    }
}
