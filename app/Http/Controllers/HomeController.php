<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // tu home.blade.php
    }

    public function storeContact(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required','string','max:120'],
            'email'   => ['required','email','max:190'],
            'subject' => ['nullable','string','max:190'],
            'message' => ['required','string','max:5000'],
        ]);

        ContactMessage::create($data);

        return back()->with('success', '¡Mensaje enviado! Te responderé lo antes posible.');
    }
}