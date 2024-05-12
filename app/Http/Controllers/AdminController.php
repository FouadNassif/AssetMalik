<?php

namespace App\Http\Controllers;

use App\Models\BookNow;
use App\Models\Appointments;
use App\Models\BookNowDates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function mainPage()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (
                $user->id == 3 &&
                $user->name = "Malik El Assat"
            ) {
                $appointments = Appointments::where('status', 'pending')->get();
                return view('barber.admin', compact('appointments'));
            } else {
                return view('barber.home');
            }
        }
    }


    public function ShowAllApoi()
    {
        $clients = Appointments::orderBy('date')->orderBy('time')->get();

        return view('barber.ClientApoi', ["Clients" => $clients]);
    }
}
