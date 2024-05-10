<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function searchItems(Request $request)
    {
        // Query all items
        $query = Items::query();

        // Apply search filter if search query is present
        if ($request->has('search')) {
            $searchQuery = $request->input('search');
            $query->where(function ($q) use ($searchQuery) {
                $q->where('name', 'like', "%$searchQuery%")
                    ->orWhere('price', 'like', "%$searchQuery%");
            });
        }

        // Apply additional filters
        if ($request->has('price')) {
            if ($request->price == 'low_to_high') {
                $query->orderBy('price');
            } elseif ($request->price == 'high_to_low') {
                $query->orderBy('price', 'desc');
            }
        }

        $data = $query->paginate(10);

        if (Auth::user()) {
            $user = Auth::user();
            $userid = $user->id;
            $favoriteItemsId = Auth::user()->favoriteItems()->pluck('items_id')->toArray();
        }

        return view('store.searched', compact('data', 'favoriteItemsId'));
    }
}
