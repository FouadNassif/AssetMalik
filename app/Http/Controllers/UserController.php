<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Items;
use Illuminate\Http\Request;
use App\Models\FavoriteItems;
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
            return redirect()->intended('/profile');
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
            $favoriteItemsId = Auth::user()->favoriteItems()->pluck('items_id')->toArray();
            $favoriteItems = Items::whereIn('id', $favoriteItemsId)->get();
            return view('user.UserProfile', compact('userAppointments', 'favoriteItems'));
        } else {
            return redirect('/loginF')->with('error', 'Please log in to view your appointments.');
        }
    }

    public function showCart(){
        if(Auth::check()){
            $cart = Auth::user()->cart()->get();
        }
        return view('user.cart', compact('cart'));
    }
}
