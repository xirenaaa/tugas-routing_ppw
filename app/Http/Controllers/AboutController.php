<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     */
    public function index()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'We are a modern web development team focused on creating beautiful and functional applications.',
            'team' => [
                ['name' => 'John Developer', 'role' => 'Full Stack Developer'],
                ['name' => 'Jane Designer', 'role' => 'UI/UX Designer'],
                ['name' => 'Bob Manager', 'role' => 'Project Manager']
            ],
            'stats' => [
                ['label' => 'Projects Completed', 'value' => '150+'],
                ['label' => 'Happy Clients', 'value' => '200+'],
                ['label' => 'Years Experience', 'value' => '5+']
            ]
        ];

        return view('about', compact('data'));
    }
}