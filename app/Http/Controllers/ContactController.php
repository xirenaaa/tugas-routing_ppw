<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store a contact form submission.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000'
        ]);

        // Di sini Anda bisa menyimpan ke database atau mengirim email
        // Contoh: Contact::create($request->all());

        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}