<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function SearchItems(Request $request)
    {
        $query = $request->input('search');

        $items = Items::where('name', 'like', "%$query%")
            ->orWhere('price', 'like', "%$query%")
            ->get();
        
        $data = [];
        foreach ($items as $item) {
            $itemData = $item->getOriginal();
            array_push($data, $itemData);
        }


        return view('store.searched', compact('data'));
    }
}
