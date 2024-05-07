<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\BookNow;
use App\Models\BookNowDates;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function BookClient()
    {
        return view('barber.admin');
    }


    public function ShowAllApoi()
    {
        $clients = Appointments::orderBy('date')->orderBy('time')->get();
        
        return view('barber.ClientApoi', ["Clients" => $clients]);
    }
}
