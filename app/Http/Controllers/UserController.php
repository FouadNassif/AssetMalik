<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('User.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => 'Invalid Email or password']);
        }
    }

    public function showRegistrationForm()
    {
        return view('user.signup');
    }

    public function register(Request $request)
    {
        // Validate Data from the user

        $request->validate([
            'name' => 'required|string|unique:Users',
            'email' => 'required|string|unique:Users',
            'phoneNumber' => 'required|string|unique:Users',
            'password' => "required|confirmed|min:1",
        ]);

        // Create the user account and save it to the DB
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'password' => bcrypt($request->password),
            'role' => '1',
        ]);

        // Authenticate the User
        Auth::login($user);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function viewAppointments()
    {
        if (Auth::check()) {
            $userAppointments = Auth::user()->appointments()->get();
            return view('user.UserProfile', compact('userAppointments'));
        } else {
            // Redirect to login if the user is not authenticated
            return redirect('/loginF')->with('error', 'Please log in to view your appointments.');
        }
    }
}
