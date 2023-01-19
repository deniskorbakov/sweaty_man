<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function store(Request $request) {
        $user = User::create([
            'name' => $request->loginReg,
            'email' => $request->emailReg,
            'password' => Hash::make($request->passwordReg)
        ]);

        Auth::login($user);

        return redirect('/userAccount');
    }
}
