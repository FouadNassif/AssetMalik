<?php

namespace App\Http\Controllers;

use App\Models\BookNow;
use App\Models\Appointments;
use App\Models\BookNowDates;
use App\Models\Items;
use App\Models\Workers;
use Illuminate\Http\Request;
use Illuminate\Queue\Worker;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function ShowAllApoi()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (
                $user->role == 2 &&
                $user->name = "fouad nassif"
            ) {
                $PendingApointments = Appointments::where('status', 'pending')->orderBy('date')->orderBy('time')->paginate(10);
                $OngoingApointments = Appointments::where('status', 'ongoing')->orderBy('date')->orderBy('time')->paginate(10);
                $FinishedApointments = Appointments::where('status', 'done')->orderBy('date')->orderBy('time')->paginate(10);
                return view('admin.ClientApoi', compact(['PendingApointments', 'OngoingApointments', 'FinishedApointments']));
            } else {
                return view('barber.home');
            }
        }
    }


    public function mainPage()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (
                $user->role == 2 &&
                $user->name = "fouad nassif"
            ) {
                $clients = Appointments::orderBy('date')->orderBy('time')->get();

                return view('admin.admin', ["Clients" => $clients]);
            }
        }
    }

    public function workers()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (
                $user->id == 2 &&
                $user->name = "fouad nassif"
            ) {
                $workers = Workers::get();
                return view('admin.workers', compact(['workers']));
            }
        }
    }

    public function showAllItems()
    {
        $items = Items::get();
        return view('admin.items', compact('items'));
    }
}
