<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials,$request->boolean('checkbox'))) {
            $request->session()->regenerate();
            return redirect()->route('userAccount');
        }
        return back()->withErrors([
            'email' => trans('auth.failed')
        ]);


    }


    public function exit(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

}
