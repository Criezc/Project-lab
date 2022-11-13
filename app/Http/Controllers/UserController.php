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

        $rememberToken = $request->has('remember_token') ? true : false;


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $rememberToken)) {
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

    public function update_profile(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required | email',
            'dob' => 'date',
            'phone' => 'required|min:3|max:15',
        ]);
        $user = User::find(Auth::id());

        $user->username = $request->username;
        $user->email =  $request->email;

        $user->dob = $request->dateOfBirth;
        $user->phone = $request->phone;

        $user->save();

        $request->session()->regenerate();

        return back()->with('success', 'Profile updated!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
