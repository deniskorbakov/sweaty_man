<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request) {
        $contact = new Contact();
        $contact->userName = $request->input('userName');
        $contact->userEmail = $request->input('userEmail');
        $contact->userText = $request->input('userText');

        $contact->save();

        return redirect()->route('home');

    }
}
