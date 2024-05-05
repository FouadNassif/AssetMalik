<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function showAllItems(){
        $items = Items::all();
        return view('store.store', compact('items'));
    }
}
