<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'login complete');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password'
        ]);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        ]);

        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();

        return redirect()->intended('/login')->with('sucess', 'Registration complted.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session_destroy();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
