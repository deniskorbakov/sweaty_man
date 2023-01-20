<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function create(Request $request) {
        return view('resetPassword', ['request' => $request]);
    }

    public function store(Request $request) {
         $request->validate([
             'token' => 'required',
             'email' => 'required|email',
             'password' => 'required|min:8'
        ]);

         $status = Password::reset(
             $request->only('email','password','token'),
             function ($user) use ($request) {
                 $user->forceFill([
                     'password' => Hash::make($request->password),
                     'remember_token' => Str::random(60)
                 ])->save();
             }
         );

         if($status === Password::PASSWORD_RESET) {
             return redirect()->route('authorization')->with('status',trans($status));
         }

         return back()->withInput($request->only('email'))
                      ->withErrors(['email' => trans($status)]);
    }
}
