<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Workers;
use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function showBookNowForm()
    {
        $workers = Workers::get();
        return view('barber.booknow', compact('workers'));
    }

    public function BookNow(Request $request)
    {
        $request->validate([
            "name" => "required|min:3",
            "phoneNumber" => "required",
            "date" => "required",
            "time" => "required|unique:appointments",
            "workerName" => 'required',
        ]);

        if (Auth::check()) {
            $user = Auth::user();
            $appointment = $user->appointments()->create([
                'user_id' => $user->id,
                'name' => $request->name,
                'phoneNumber' => $request->phoneNumber,
                'date' => $request->date,
                'time' => $request->time,
                'message' => $request->message,
                'status' => "pending",
                'workerName' => $request->workerName,
            ]);

            if ($appointment) {
                return redirect('/profile')->with('BookNow_success', 'Book Now Success');
            }
        }
    }

    public function viewAppointments()
    {
        $guestAppointments = session('booking');

        return view('user.index', compact('guestAppointments'));
    }
}
