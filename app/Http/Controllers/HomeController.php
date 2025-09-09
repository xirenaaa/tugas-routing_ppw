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
            'title' => 'Welcome to Creativa',
            'subtitle' => 'We transform your vision into a high-performing digital asset. We build custom web solutions designed to meet your unique business objectives',
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