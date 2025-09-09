@extends('layouts.app')

@section('title', $data['title'])

@section('content')
<div class="container">
    <!-- Page Header -->
    <div class="glass-card" style="padding: 3rem 2rem; text-align: center; margin-bottom: 3rem;">
        <h1 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">
            {{ $data['title'] }}
        </h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
            {{ $data['description'] }}
        </p>
    </div>

    <!-- Company Stats -->
    <div class="row" style="margin-bottom: 3rem;">
        @foreach($data['stats'] as $stat)
        <div class="col">
            <div class="glass-card" style="padding: 2rem; text-align: center;">
                <div style="font-size: 2.5rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">
                    {{ $stat['value'] }}
                </div>
                <p style="font-weight: 500; opacity: 0.8; margin: 0;">
                    {{ $stat['label'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Our Story -->
    <div class="glass-card" style="padding: 3rem; margin-bottom: 3rem;">
        <div class="row" style="align-items: center;">
            <div class="col">
                <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Our Story</h2>
                <p style="margin-bottom: 1.5rem;">
                    Founded with a passion for creating exceptional digital experiences, we have been at the forefront of web development innovation. Our journey began with a simple mission: to bridge the gap between beautiful design and powerful functionality.
                </p>
                <p style="margin-bottom: 1.5rem;">
                    Over the years, we have evolved from a small team of enthusiasts to a comprehensive digital agency, serving clients across various industries. We believe in the power of technology to transform businesses and create meaningful connections.
                </p>
                <p>
                    Today, we continue to push boundaries, embrace new technologies, and deliver solutions that exceed expectations. Our commitment to excellence and innovation drives everything we do.
                </p>
            </div>
            <div class="col">
                <div style="background: rgba(255, 255, 255, 0.1); border-radius: 15px; padding: 2rem; text-align: center;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🚀</div>
                    <h3 style="margin-bottom: 1rem;">Innovation First</h3>
                    <p style="opacity: 0.8; margin: 0;">
                        We embrace cutting-edge technologies and methodologies to deliver the best solutions.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="glass-card" style="padding: 3rem;">
        <h2 style="text-align: center; font-size: 2rem; margin-bottom: 3rem;">Meet Our Team</h2>
        <div class="row">
            @foreach($data['team'] as $member)
            <div class="col">
                <div style="text-align: center;">
                    <!-- Avatar placeholder -->
                    <div style="width: 120px; height: 120px; border-radius: 50%; background: rgba(255, 255, 255, 0.2); margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 3rem;">
                        @php
                            $avatars = ['👨‍💻', '👩‍🎨', '👨‍💼'];
                            echo $avatars[array_rand($avatars)];
                        @endphp
                    </div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;">{{ $member['name'] }}</h3>
                    <p style="opacity: 0.8; font-weight: 500; margin-bottom: 1rem;">{{ $member['role'] }}</p>
                    <p style="opacity: 0.7; font-size: 0.9rem; margin: 0;">
                        @switch($member['role'])
                            @case('Full Stack Developer')
                                Passionate about creating robust and scalable web applications using modern technologies.
                                @break
                            @case('UI/UX Designer')
                                Dedicated to crafting beautiful and intuitive user experiences that delight and engage.
                                @break
                            @case('Project Manager')
                                Ensures smooth project delivery and maintains excellent communication with our clients.
                                @break
                        @endswitch
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Values Section -->
    <div class="row" style="margin-top: 3rem;">
        <div class="col">
            <div class="glass-card" style="padding: 2.5rem; text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">💡</div>
                <h3 style="margin-bottom: 1rem;">Innovation</h3>
                <p style="opacity: 0.8; margin: 0;">
                    We constantly explore new technologies and approaches to solve complex challenges.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="glass-card" style="padding: 2.5rem; text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🎯</div>
                <h3 style="margin-bottom: 1rem;">Quality</h3>
                <p style="opacity: 0.8; margin: 0;">
                    Every project is crafted with attention to detail and commitment to excellence.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="glass-card" style="padding: 2.5rem; text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🤝</div>
                <h3 style="margin-bottom: 1rem;">Partnership</h3>
                <p style="opacity: 0.8; margin: 0;">
                    We believe in building long-term relationships based on trust and mutual success.
                </p>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    /* Staggered animation for team members */
    .col:nth-child(1) .glass-card { animation-delay: 0.1s; }
    .col:nth-child(2) .glass-card { animation-delay: 0.2s; }
    .col:nth-child(3) .glass-card { animation-delay: 0.3s; }
    
    /* Enhanced hover effects */
    .glass-card:hover {
        transform: translateY(-8px) scale(1.01);
    }
    
    /* Avatar hover effect */
    .glass-card div[style*="border-radius: 50%"]:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
</style>
@endpush
@endsection