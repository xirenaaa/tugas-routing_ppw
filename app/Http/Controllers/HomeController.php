<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $data = [
            'title' => 'Welcome to Our App',
            'subtitle' => 'Modern Laravel Application with Glassmorphism Design',
            'features' => [
                'Modern UI Design',
                'Responsive Layout',
                'Glassmorphism Effect',
                'Laravel Framework'
            ]
        ];

        return view('home', compact('data'));
    }
}