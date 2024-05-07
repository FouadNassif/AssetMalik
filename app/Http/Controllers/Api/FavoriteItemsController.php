<?php

namespace App\Http\Controllers\Api;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FavoriteItems;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class FavoriteItemsController extends Controller
{
    public function addFavoriteItem(Request $request)
    {
        $requestData = $request->json()->all();
        $item_id = $requestData['item_id'];
        $user_id = $requestData['user_id'];

        if ($item_id && $user_id) {
            $favoriteItem = FavoriteItems::create([
                'user_id' => $user_id,
                'items_id' => $item_id,
            ]);
            if ($favoriteItem) {
                return response()->json([
                    'success' => 'true'
                ]);
            }
        }
    }

    public function deleteFavoriteItem(Request $request)
    {
        $requestData = $request->json()->all();
        $item_id = $requestData['item_id'];
        $user_id = $requestData['user_id'];
        
        $deletedItem = FavoriteItems::where('user_id', $user_id)
            ->where('items_id', $item_id)
            ->delete();

        if($deletedItem){
            return response()->json([
                'success' => 'true'
            ]);
        }
    }
}
