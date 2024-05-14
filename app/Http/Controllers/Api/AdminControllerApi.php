<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;

class AdminControllerApi extends Controller
{
    public function changeApoiStatus(Request $request)
    {
        $requestData = $request->json()->all();
        $userName = $requestData['userName'];
        $status = $requestData['status'];
        $time = $requestData['time'];
        $date = $requestData['date'];
        if ($userName && $status && $date && $time) {
            $changeStatus = Appointments::where('name', $userName)
                ->where('time', $time)
                ->where('date', $date)
                ->update(['status' => $status]);

            if ($changeStatus) {
                return response()->json([
                    'success' => true,
                    'message' => 'Status updated successfully',
                    'data' => Appointments::where('name', $userName)
                        ->where('time', $time)
                        ->where('date', $date)->get(),
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to update status',
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Missing required fields',
            ]);
        }
    }

    public function deleteAppointment(Request $request)
    {
        $requestData = $request->json()->all();
        $userName = $requestData['userName'];
        $time = $requestData['time'];
        $date = $requestData['date'];
        if ($userName && $date && $time) {
            $changeStatus = Appointments::where('name', $userName)
                ->where('time', $time)
                ->where('date', $date)
                ->delete();
            if ($changeStatus) {
                return response()->json([
                    'success' => "deleted",
                ]);
            }
        }
    }
}
