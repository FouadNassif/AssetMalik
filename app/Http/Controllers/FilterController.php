<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterItems(Request $request)
    {
        $query = Items::query();

        if ($request->has('price')) {
            if ($request->price == 'low_to_high') {
                $query->orderBy('price');
            } elseif ($request->price == 'high_to_low') {
                $query->orderBy('price', 'desc');
            }
        } else if ($request->has('category')) {
            if ($request->category == 'Razzors') {
                $query->orderBy('category_id');
            } elseif ($request->price == 'high_to_low') {
                $query->orderBy('price', 'desc');
            }

            $data = $query->paginate(10);
            return view('store.filtered', compact('data'));
        }
    }
}
