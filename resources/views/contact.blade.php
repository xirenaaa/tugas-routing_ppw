@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container">
        <!-- Page Header -->
        <div class="glass-card" style="padding: 3rem 2rem; text-align: center; margin-bottom: 3rem;">
            <h1 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">
                Get In Touch
            </h1>
            <p style="font-size: 1.2rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <!-- Contact Form -->
            <div class="col" style="flex: 2;">
                <div class="glass-card" style="padding: 3rem;">
                    <h2 style="margin-bottom: 2rem; font-size: 1.5rem;">Send us a Message</h2>

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" value="{{ old('name') }}" placeholder="Enter your full name" required>
                                    @error('name')
                                        <div style="color: #fca5a5; font-size: 0.875rem; margin-top: 0.5rem;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                        name="email" value="{{ old('email') }}" placeholder="Enter your email address"
                                        required>
                                    @error('email')
                                        <div style="color: #fca5a5; font-size: 0.875rem; margin-top: 0.5rem;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject"
                                name="subject" value="{{ old('subject') }}" placeholder="What is this regarding?" required>
                            @error('subject')
                                <div style="color: #fca5a5; font-size: 0.875rem; margin-top: 0.5rem;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                                name="message" rows="6" placeholder="Tell us more about your inquiry..."
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <div style="color: #fca5a5; font-size: 0.875rem; margin-top: 0.5rem;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 1rem;">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col" style="flex: 1;">
                <div class="glass-card" style="padding: 3rem; height: 100%;">
                    <h2 style="margin-bottom: 2rem; font-size: 1.5rem;">Contact Information</h2>

                    <div style="margin-bottom: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-size: 1.2rem;">
                                📍
                            </div>
                            <div>
                                <h4 style="margin-bottom: 0.25rem; font-size: 1rem;">Address</h4>
                                <p style="opacity: 0.8; margin: 0; font-size: 0.9rem;">
                                    Yogyakarta, Indonesia<br>
                                    12345
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-size: 1.2rem;">
                                📞
                            </div>
                            <div>
                                <h4 style="margin-bottom: 0.25rem; font-size: 1rem;">Phone</h4>
                                <p style="opacity: 0.8; margin: 0; font-size: 0.9rem;">
                                    +62 859 4221 1164
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-size: 1.2rem;">
                                ✉️
                            </div>
                            <div>
                                <h4 style="margin-bottom: 0.25rem; font-size: 1rem;">Email</h4>
                                <p style="opacity: 0.8; margin: 0; font-size: 0.9rem;">
                                    falahauladi@gmail.com
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <div
                                style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-size: 1.2rem;">
                                🕐
                            </div>
                            <div>
                                <h4 style="margin-bottom: 0.25rem; font-size: 1rem;">Business Hours</h4>
                                <p style="opacity: 0.8; margin: 0; font-size: 0.9rem;">
                                    Mon - Fri: 9:00 AM - 6:00 PM<br>
                                    Sat - Sun: 10:00 AM - 4:00 PM
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div style="border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 2rem;">
                        <h4 style="margin-bottom: 1rem; font-size: 1rem;">Follow Us</h4>
                        <div style="display: flex; gap: 1rem;">
                            <a href="#"
                                style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                                📘
                            </a>
                            <a href="#"
                                style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                                🐦
                            </a>
                            <a href="#"
                                style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                                📷
                            </a>
                            <a href="#"
                                style="width: 40px; height: 40px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                                💼
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="glass-card" style="padding: 3rem; margin-top: 3rem;">
            <h2 style="text-align: center; margin-bottom: 3rem;">Frequently Asked Questions</h2>
            <div class="row">
                <div class="col">
                    <div style="margin-bottom: 2rem;">
                        <h4 style="margin-bottom: 0.5rem; font-size: 1.1rem;">What services do you offer?</h4>
                        <p style="opacity: 0.8; margin: 0;">
                            We offer a full range of web development services including custom web applications, e-commerce
                            solutions, mobile apps, and digital consulting.
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem;">
                        <h4 style="margin-bottom: 0.5rem; font-size: 1.1rem;">How long does a typical project take?</h4>
                        <p style="opacity: 0.8; margin: 0;">
                            Project timelines vary depending on complexity, but most projects are completed within 4-12
                            weeks from the initial consultation.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div style="margin-bottom: 2rem;">
                        <h4 style="margin-bottom: 0.5rem; font-size: 1.1rem;">Do you provide ongoing support?</h4>
                        <p style="opacity: 0.8; margin: 0;">
                            Yes, we offer comprehensive maintenance and support packages to ensure your website continues to
                            perform optimally.
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem;">
                        <h4 style="margin-bottom: 0.5rem; font-size: 1.1rem;">What is your pricing structure?</h4>
                        <p style="opacity: 0.8; margin: 0;">
                            We provide custom quotes based on your specific requirements. Contact us for a detailed proposal
                            tailored to your needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            /* Form validation styles */
            .form-control.is-invalid {
                border-color: rgba(248, 113, 113, 0.5);
                background: rgba(248, 113, 113, 0.1);
            }

            /* Enhanced form focus */
            .form-control:focus {
                box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.1);
            }

            /* Social link hover effects */
            a[style*="border-radius: 50%"]:hover {
                background: rgba(255, 255, 255, 0.3) !important;
                transform: translateY(-2px) scale(1.1);
            }

            /* Contact info hover effects */
            div[style*="display: flex; align-items: center"]:hover {
                transform: translateX(5px);
                transition: transform 0.3s ease;
            }

            /* Textarea resize */
            textarea.form-control {
                resize: vertical;
                min-height: 120px;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Form validation enhancement
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.querySelector('form');
                const inputs = form.querySelectorAll('input, textarea');

                inputs.forEach(input => {
                    input.addEventListener('blur', function () {
                        if (this.hasAttribute('required') && !this.value.trim()) {
                            this.style.borderColor = 'rgba(248, 113, 113, 0.5)';
                        } else {
                            this.style.borderColor = 'rgba(255, 255, 255, 0.2)';
                        }
                    });

                    input.addEventListener('input', function () {
                        if (this.style.borderColor === 'rgba(248, 113, 113, 0.5)' && this.value.trim()) {
                            this.style.borderColor = 'rgba(255, 255, 255, 0.2)';
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection