<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $authLogin = User::where('email', $request->email)->first();

        if ($authLogin && Hash::check($request->password, $authLogin->password)) {
            Auth::login($authLogin);
            Session::put('loginId', $authLogin->id);
            return redirect()->route('std.myWelcomeView')->with('success', 'Login successful!');
        } else {
            return back()->with('fail', 'Email or password is incorrect');
        }
    }

    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect()->route('auth.index')->with('success', 'Logout successfully!');
        } else {
            return redirect()->route('auth.index')->with('error', 'You are not logged in');
        }
    }
}