<?php

use App\Models\ContactMessage;

public function index()
{
    return view('dashboard', [
        'messages' => ContactMessage::latest()->get()
    ]);
}