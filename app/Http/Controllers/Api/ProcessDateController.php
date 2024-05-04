<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use Illuminate\Http\Request;

class ProcessDateController extends Controller
{
    public function AvailableDate(Request $request)
    {
        $date = [];
        $requestData = $request->json()->all();
        $date = $requestData['date'];
        $times = Appointments::where('date', $date)->pluck('time');

        return response()->json([
            'times' => $times,
        ]);
    }
}
