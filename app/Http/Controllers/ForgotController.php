<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotController extends Controller
{
    public function forgot(Request $request) {
       $request->validate([
            'email' => 'required|email'
        ]);

       $status = Password::sendResetLink(
         $request->only('email')
       );

       if ($status === Password::RESET_LINK_SENT) {
           return back()->with('status',trans($status));
       }
       return back()->withInput($request->only('email'))
                    ->withErrors(['email'=> trans($status)]);
    }

}
