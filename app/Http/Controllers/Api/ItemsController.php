<?php

namespace App\Http\Controllers\Api;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function getItem(Request $request)
    {
        $id = [];
        $requestData = $request->json()->all();
        $id = $requestData['item_id'];
        $item = Items::where('id', $id)->get();

        return response()->json([
            'item' => $item,
        ]);
    }
}
