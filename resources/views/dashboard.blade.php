@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <!-- Dashboard Header -->
        <div class="glass-card" style="padding: 2rem; margin-bottom: 2rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <div>
                    <h1 style="font-size: 2rem; margin-bottom: 0.5rem;">Dashboard</h1>
                    <p style="opacity: 0.8; margin: 0;">Welcome back! Here's what's happening today.</p>
                </div>
                <div style="display: flex; gap: 1rem; align-items: center;">
                    <div
                        style="background: rgba(255, 255, 255, 0.1); padding: 0.5rem 1rem; border-radius: 10px; font-size: 0.9rem;">
                        📅 {{ date('M d, Y') }}
                    </div>
                    <div
                        style="background: rgba(255, 255, 255, 0.1); padding: 0.5rem 1rem; border-radius: 10px; font-size: 0.9rem;">
                        🕐 {{ date('H:i') }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row" style="margin-bottom: 2rem;">
            <div class="col">
                <div class="glass-card" style="padding: 2rem; text-align: center;">
                    <div style="font-size: 2rem; margin-bottom: 0.5rem;">📊</div>
                    <h3 style="font-size: 2rem; margin-bottom: 0.5rem;">1,234</h3>
                    <p style="opacity: 0.8; margin: 0;">Total Views</p>
                    <div style="font-size: 0.8rem; color: #10b981; margin-top: 0.5rem;">↗ +12%</div>
                </div>
            </div>
            <div class="col">
                <div class="glass-card" style="padding: 2rem; text-align: center;">
                    <div style="font-size: 2rem; margin-bottom: 0.5rem;">👥</div>
                    <h3 style="font-size: 2rem; margin-bottom: 0.5rem;">567</h3>
                    <p style="opacity: 0.8; margin: 0;">Active Users</p>
                    <div style="font-size: 0.8rem; color: #10b981; margin-top: 0.5rem;">↗ +8%</div>
                </div>
            </div>
            <div class="col">
                <div class="glass-card" style="padding: 2rem; text-align: center;">
                    <div style="font-size: 2rem; margin-bottom: 0.5rem;">💰</div>
                    <h3 style="font-size: 2rem; margin-bottom: 0.5rem;">$12,345</h3>
                    <p style="opacity: 0.8; margin: 0;">Revenue</p>
                    <div style="font-size: 0.8rem; color: #10b981; margin-top: 0.5rem;">↗ +15%</div>
                </div>
            </div>
            <div class="col">
                <div class="glass-card" style="padding: 2rem; text-align: center;">
                    <div style="font-size: 2rem; margin-bottom: 0.5rem;">📈</div>
                    <h3 style="font-size: 2rem; margin-bottom: 0.5rem;">89</h3>
                    <p style="opacity: 0.8; margin: 0;">Projects</p>
                    <div style="font-size: 0.8rem; color: #10b981; margin-top: 0.5rem;">↗ +5%</div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Recent Activity -->
            <div class="col" style="flex: 2;">
                <div class="glass-card" style="padding: 2rem; height: 400px;">
                    <h2 style="margin-bottom: 1.5rem; font-size: 1.5rem;">Recent Activity</h2>
                    <div style="max-height: 300px; overflow-y: auto;">
                        @php
                            $activities = [
                                ['icon' => '👤', 'action' => 'New user registered', 'time' => '2 minutes ago'],
                                ['icon' => '📝', 'action' => 'Contact form submitted', 'time' => '5 minutes ago'],
                                ['icon' => '💻', 'action' => 'New project created', 'time' => '10 minutes ago'],
                                ['icon' => '🔧', 'action' => 'System maintenance completed', 'time' => '1 hour ago'],
                                ['icon' => '📊', 'action' => 'Monthly report generated', 'time' => '2 hours ago'],
                                ['icon' => '🚀', 'action' => 'Application deployed', 'time' => '3 hours ago'],
                            ];
                        @endphp

                        @foreach($activities as $activity)
                            <div
                                style="display: flex; align-items: center; padding: 1rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                                <div
                                    style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-size: 1.2rem;">
                                    {{ $activity['icon'] }}
                                </div>
                                <div style="flex: 1;">
                                    <p style="margin: 0; font-weight: 500;">{{ $activity['action'] }}</p>
                                    <p style="margin: 0; font-size: 0.8rem; opacity: 0.7;">{{ $activity['time'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="col" style="flex: 1;">
                <div class="glass-card" style="padding: 2rem; height: 400px;">
                    <h2 style="margin-bottom: 1.5rem; font-size: 1.5rem;">Quick Actions</h2>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <a href="#" class="btn"
                            style="text-decoration: none; display: flex; align-items: center; gap: 0.5rem; padding: 1rem; justify-content: flex-start;">
                            <span style="font-size: 1.2rem;">📝</span>
                            Create New Post
                        </a>
                        <a href="#" class="btn"
                            style="text-decoration: none; display: flex; align-items: center; gap: 0.5rem; padding: 1rem; justify-content: flex-start;">
                            <span style="font-size: 1.2rem;">👥</span>
                            Manage Users
                        </a>
                        <a href="#" class="btn"
                            style="text-decoration: none; display: flex; align-items: center; gap: 0.5rem; padding: 1rem; justify-content: flex-start;">
                            <span style="font-size: 1.2rem;">📊</span>
                            View Analytics
                        </a>
                        <a href="#" class="btn"
                            style="text-decoration: none; display: flex; align-items: center; gap: 0.5rem; padding: 1rem; justify-content: flex-start;">
                            <span style="font-size: 1.2rem;">⚙️</span>
                            Settings
                        </a>
                        <a href="#" class="btn btn-primary"
                            style="text-decoration: none; display: flex; align-items: center; gap: 0.5rem; padding: 1rem; justify-content: center; margin-top: 1rem;">
                            <span style="font-size: 1.2rem;">🚀</span>
                            Launch Campaign
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Chart Placeholder -->
        <div class="glass-card" style="padding: 2rem; margin-top: 2rem;">
            <h2 style="margin-bottom: 1.5rem; font-size: 1.5rem;">Performance Overview</h2>
            <div
                style="height: 200px; background: rgba(255, 255, 255, 0.05); border-radius: 10px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                <!-- Mock Chart -->
                <div
                    style="position: absolute; bottom: 20px; left: 20px; right: 20px; height: 120px; display: flex; align-items: end; gap: 10px;">
                    @for($i = 1; $i <= 12; $i++)
                        <div
                            style="flex: 1; background: linear-gradient(to top, rgba(93, 130, 237, 0.6), rgba(61, 80, 208, 0.3)); height: {{ rand(30, 100) }}%; border-radius: 4px 4px 0 0; animation: chartGrow {{ $i * 0.1 }}s ease-out;">
                        </div>
                    @endfor
                </div>
                <div style="color: rgba(255, 255, 255, 0.6); text-align: center;">
                    <div style="font-size: 3rem; margin-bottom: 0.5rem;">📈</div>
                    <p>Performance metrics visualization</p>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            /* Chart animation */
            @keyframes chartGrow {
                from {
                    height: 0%;
                }

                to {
                    height: var(--final-height, 50%);
                }
            }

            /* Activity scroll styling */
            div[style*="overflow-y: auto"]::-webkit-scrollbar {
                width: 4px;
            }

            div[style*="overflow-y: auto"]::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 2px;
            }

            div[style*="overflow-y: auto"]::-webkit-scrollbar-thumb {
                background: rgba(255, 255, 255, 0.3);
                border-radius: 2px;
            }

            /* Enhanced hover effects for dashboard cards */
            .glass-card:hover {
                transform: translateY(-5px) scale(1.01);
            }

            /* Pulse animation for stats */
            .glass-card h3 {
                animation: statsPulse 2s ease-in-out infinite;
            }

            @keyframes statsPulse {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.8;
                }
            }

            /* Activity item hover effect */
            div[style*="border-bottom"]:hover {
                background: rgba(255, 255, 255, 0.05);
                border-radius: 10px;
                transition: all 0.3s ease;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Real-time clock update
            function updateTime() {
                const now = new Date();
                const timeElement = document.querySelector('div[style*="🕐"]');
                if (timeElement) {
                    const hours = now.getHours().toString().padStart(2, '0');
                    const minutes = now.getMinutes().toString().padStart(2, '0');
                    timeElement.textContent = `🕐 ${hours}:${minutes}`;
                }
            }

            // Update time every minute
            setInterval(updateTime, 60000);

            // Animate stats on load
            document.addEventListener('DOMContentLoaded', function () {
                const statNumbers = document.querySelectorAll('.glass-card h3');
                statNumbers.forEach((stat, index) => {
                    const finalValue = parseInt(stat.textContent.replace(/[^\d]/g, ''));
                    let currentValue = 0;
                    const increment = finalValue / 50;

                    const timer = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= finalValue) {
                            stat.textContent = stat.textContent; // Keep original formatting
                            clearInterval(timer);
                        } else {
                            const displayValue = Math.floor(currentValue);
                            if (stat.textContent.includes('$')) {
                                stat.textContent = `$${displayValue.toLocaleString()}`;
                            } else {
                                stat.textContent = displayValue.toLocaleString();
                            }
                        }
                    }, 50);

                    // Stagger the animation
                    setTimeout(() => {
                        // Start animation
                    }, index * 200);
                });
            });
        </script>
    @endpush
@endsection