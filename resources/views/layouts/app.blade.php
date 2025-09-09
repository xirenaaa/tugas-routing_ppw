<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laravel App')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
            background: linear-gradient(-45deg, #fce0e6, #d8b4fe, #a7d7e8, #fbe2e3);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            color: #1f2937;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Main Glassmorphism Card Style */
        .glass-card {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
        }

        /* Navigation */
        .navbar {
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(174, 214, 241, 0.5);
            /* Soft Blue, semi-transparent */
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            text-decoration: none;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: #ffffff;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #ffffff;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        /* Typography */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #111827;
            /* Darkest grey for headings */
            margin-bottom: 1rem;
        }

        p {
            color: #374151;
            /* Medium grey for paragraphs */
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .glass-card h1,
        .glass-card h2,
        .glass-card h3,
        .glass-card h4,
        .glass-card h5,
        .glass-card h6,
        .glass-card p {
            color: #1f2937;
            /* Consistent dark text on cards */
        }


        /* Buttons */
        .btn {
            display: inline-block;
            padding: 0.75rem 2rem;
            background-color: rgba(255, 255, 255, 0.2);
            color: #1f2937;
            text-decoration: none;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #5dade2;
            /* Soft blue from previous theme for consistency */
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #529fca;
        }

        /* Forms */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            color: #374151;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            background: rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 10px;
            color: #1f2937;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #5dade2;
            box-shadow: 0 0 0 3px rgba(93, 173, 226, 0.4);
        }

        .form-control::placeholder {
            color: #6b7280;
        }

        /* Grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .col {
            flex: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                flex-direction: column;
                gap: 1rem;
            }

            .row {
                flex-direction: column;
            }

            .container {
                padding: 1rem;
            }
        }

        /* Alert */
        .alert {
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 10px;
        }

        .alert-success {
            background: rgba(212, 237, 218, 0.8);
            border: 1px solid rgba(195, 230, 203, 1);
            color: #155724;
        }
    </style>

    @stack('styles')
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('home') }}" class="nav-brand">Creativa</a>
            <ul class="nav-menu">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <script>
        // Simple fade in animation
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.glass-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 150);
            });
        });
    </script>

    @stack('scripts')
</body>

</html>