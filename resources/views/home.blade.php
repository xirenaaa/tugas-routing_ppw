@extends('layouts.app')

@section('title', $data['title'])

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="glass-card" style="padding: 4rem 3rem; text-align: center; margin-bottom: 3rem;">
        <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 1rem;">
            {{ $data['title'] }}
        </h1>
        <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">
            {{ $data['subtitle'] }}
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
            <a href="{{ route('contact') }}" class="btn">Get Started</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row">
        @foreach($data['features'] as $index => $feature)
        <div class="col">
            <div class="glass-card" style="padding: 2rem; text-align: center; height: 100%;">
                <div style="width: 60px; height: 60px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                    @switch($index)
                        @case(0)
                            🎨
                            @break
                        @case(1)
                            📱
                            @break
                        @case(2)
                            ✨
                            @break
                        @case(3)
                            ⚡
                            @break
                        @default
                            🚀
                    @endswitch
                </div>
                <h3 style="font-size: 1.25rem; margin-bottom: 1rem;">{{ $feature }}</h3>
                <p style="opacity: 0.8; margin-bottom: 0;">
                    @switch($index)
                        @case(0)
                            Beautiful and intuitive user interface design with modern glassmorphism effects.
                            @break
                        @case(1)
                            Fully responsive design that works perfectly on all devices and screen sizes.
                            @break
                        @case(2)
                            Stunning visual effects with backdrop filters and smooth animations.
                            @break
                        @case(3)
                            Built with Laravel framework for robust and scalable web applications.
                            @break
                    @endswitch
                </p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Stats Section -->
    <div class="glass-card" style="padding: 3rem 2rem; margin-top: 3rem;">
        <h2 style="text-align: center; font-size: 2rem; margin-bottom: 3rem;">Why Choose Us</h2>
        <div class="row">
            <div class="col" style="text-align: center;">
                <div style="font-size: 3rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">100+</div>
                <p style="opacity: 0.8; margin: 0;">Projects Completed</p>
            </div>
            <div class="col" style="text-align: center;">
                <div style="font-size: 3rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">50+</div>
                <p style="opacity: 0.8; margin: 0;">Happy Clients</p>
            </div>
            <div class="col" style="text-align: center;">
                <div style="font-size: 3rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">24/7</div>
                <p style="opacity: 0.8; margin: 0;">Support Available</p>
            </div>
            <div class="col" style="text-align: center;">
                <div style="font-size: 3rem; font-weight: 700; color: white; margin-bottom: 0.5rem;">99%</div>
                <p style="opacity: 0.8; margin: 0;">Uptime Guarantee</p>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="glass-card" style="padding: 3rem 2rem; margin-top: 3rem; text-align: center;">
        <h2 style="font-size: 2rem; margin-bottom: 1rem;">Ready to Get Started?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">
            Join thousands of satisfied customers who trust our platform for their business needs.
        </p>
        <a href="{{ route('contact') }}" class="btn btn-primary" style="font-size: 1.1rem; padding: 1rem 2.5rem;">
            Contact Us Today
        </a>
    </div>
</div>

@push('styles')
<style>
    /* Additional animations for home page */
    .glass-card {
        animation: fadeInUp 0.8s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Hover effects for feature cards */
    .glass-card:hover {
        transform: translateY(-10px) scale(1.02);
    }
</style>
@endpush
@endsection