<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CDS - Affordable Medical Scheme for All</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .hero-bg {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #22c55e 100%);
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .nav-scroll {
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            touch-action: manipulation;
        }
        @media (hover: hover) {
            .card-hover:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }
        }
        .card-hover:active {
            transform: scale(0.98);
        }
        .gradient-text {
            background: linear-gradient(135deg, #1e40af 0%, #22c55e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        /* Mobile-first: Ensure touch targets are at least 44x44px */
        a, button {
            min-height: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        /* Improve text readability on mobile */
        @media (max-width: 640px) {
            body {
                font-size: 16px;
                line-height: 1.6;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 nav-scroll shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 sm:h-20 md:h-24">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        @php
                            $logoPath = file_exists(public_path('images/CDS_Logo.jpg')) ? asset('images/CDS_Logo.jpg') : (file_exists(public_path('images/CDS_Logo.png')) ? asset('images/CDS_Logo.png') : (file_exists(public_path('images/CDS_Logo.svg')) ? asset('images/CDS_Logo.svg') : null));
                        @endphp
                        @if($logoPath)
                            <img src="{{ $logoPath }}" alt="CDS Logo" class="h-16 sm:h-20 md:h-24 w-auto">
                        @else
                            <div class="flex items-center space-x-2 sm:space-x-3">
                                <div class="flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 md:w-20 md:h-20 rounded-lg bg-gradient-to-br from-blue-600 to-green-500">
                                    <span class="text-white font-bold text-lg sm:text-xl md:text-2xl">CDS</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-blue-600 font-bold text-base sm:text-lg md:text-xl">CDS</span>
                                    <span class="text-xs sm:text-sm text-gray-600 hidden sm:block">Medical Scheme</span>
                                </div>
                            </div>
                        @endif
                    </a>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-6 lg:space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium transition text-sm lg:text-base">Home</a>
                    <a href="#plans" class="text-gray-700 hover:text-blue-600 font-medium transition text-sm lg:text-base">Plans</a>
                    <a href="#benefits" class="text-gray-700 hover:text-blue-600 font-medium transition text-sm lg:text-base">Benefits</a>
                    <a href="#how-it-works" class="text-gray-700 hover:text-blue-600 font-medium transition text-sm lg:text-base">How It Works</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition text-sm lg:text-base">Contact</a>
                </div>
                
                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="#contact" class="bg-gradient-to-r from-blue-600 to-green-500 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-semibold hover:shadow-lg transition text-sm lg:text-base">
                        Register Today
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 p-2 -mr-2" aria-label="Toggle menu">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-2">
                <a href="#home" class="block text-gray-700 hover:text-blue-600 font-medium py-2 text-base">Home</a>
                <a href="#plans" class="block text-gray-700 hover:text-blue-600 font-medium py-2 text-base">Plans</a>
                <a href="#benefits" class="block text-gray-700 hover:text-blue-600 font-medium py-2 text-base">Benefits</a>
                <a href="#how-it-works" class="block text-gray-700 hover:text-blue-600 font-medium py-2 text-base">How It Works</a>
                <a href="#contact" class="block text-gray-700 hover:text-blue-600 font-medium py-2 text-base">Contact</a>
                <a href="#contact" class="block bg-gradient-to-r from-blue-600 to-green-500 text-white px-6 py-3 rounded-lg font-semibold text-center mt-4 text-base">
                    Register Today
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-[85vh] sm:min-h-screen flex items-center pt-16 sm:pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 md:py-20 w-full">
            <div class="hero-content max-w-3xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-6 leading-tight">
                    Affordable Healthcare for Every Family
                </h1>
                <p class="text-base sm:text-lg md:text-xl text-white/90 mb-6 sm:mb-8">
                    Community-based medical coverage you can trust.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="#contact" class="bg-green-500 hover:bg-green-600 active:bg-green-700 text-white px-6 py-3.5 sm:px-8 sm:py-4 rounded-lg font-semibold text-base sm:text-lg transition shadow-lg hover:shadow-xl text-center">
                        Register Today
                    </a>
                    <a href="#plans" class="bg-white/10 backdrop-blur-sm border-2 border-white text-white px-6 py-3.5 sm:px-8 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:bg-white/20 active:bg-white/30 transition text-center">
                        View Plans
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join Section -->
    <section id="benefits" class="py-12 sm:py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 sm:mb-12 md:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-2">Why Join Our Medical Scheme?</h2>
                <div class="flex items-center justify-center mb-4 px-4">
                    <div class="h-px bg-gray-300 w-8 sm:w-12 md:w-20"></div>
                    <p class="text-base sm:text-lg md:text-xl text-blue-600 mx-2 sm:mx-4 font-medium">Community-Focused Benefits for You</p>
                    <div class="h-px bg-gray-300 w-8 sm:w-12 md:w-20"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8">
                <!-- Benefit Card 1 -->
                <div class="bg-white rounded-xl p-5 sm:p-6 md:p-8 shadow-lg card-hover border border-gray-100">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-green-100 rounded-lg flex items-center justify-center mb-4 sm:mb-5 md:mb-6">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3">Affordable Plans</h3>
                    <p class="text-sm sm:text-base text-gray-600">Cost effective options for all</p>
                </div>
                
                <!-- Benefit Card 2 -->
                <div class="bg-white rounded-xl p-5 sm:p-6 md:p-8 shadow-lg card-hover border border-gray-100">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4 sm:mb-5 md:mb-6">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3">Trusted Clinics</h3>
                    <p class="text-sm sm:text-base text-gray-600">Quality care, close to home</p>
                </div>
                
                <!-- Benefit Card 3 -->
                <div class="bg-white rounded-xl p-5 sm:p-6 md:p-8 shadow-lg card-hover border border-gray-100">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-4 sm:mb-5 md:mb-6">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3">Quick Registration</h3>
                    <p class="text-sm sm:text-base text-gray-600">Easy sign up process</p>
                </div>
                
                <!-- Benefit Card 4 -->
                <div class="bg-white rounded-xl p-5 sm:p-6 md:p-8 shadow-lg card-hover border border-gray-100">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-pink-100 rounded-lg flex items-center justify-center mb-4 sm:mb-5 md:mb-6">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3">Family Coverage</h3>
                    <p class="text-sm sm:text-base text-gray-600">Plans for your loved ones</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Plans Section -->
    <section id="plans" class="py-12 sm:py-16 md:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 sm:mb-12 md:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-2">Our Plans</h2>
                <p class="text-base sm:text-lg md:text-xl text-blue-600 font-medium">Simple & Transparent Pricing</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6 md:gap-8 max-w-6xl mx-auto">
                <!-- Basic Plan -->
                <div class="bg-white rounded-2xl p-5 sm:p-6 md:p-8 shadow-lg border-2 border-blue-200 card-hover">
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Basic Plan</h3>
                    <div class="mb-5 sm:mb-6">
                        <span class="text-3xl sm:text-4xl font-bold text-blue-600">MWK 5,000</span>
                        <span class="text-sm sm:text-base text-gray-600"> / month</span>
                    </div>
                    <ul class="space-y-3 sm:space-y-4 mb-6 sm:mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-500 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-gray-700">Outpatient Care</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-500 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-gray-700">Emergency Support</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-500 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-gray-700">Basic Services</span>
                        </li>
                    </ul>
                    <a href="#contact" class="block w-full bg-green-500 hover:bg-green-600 active:bg-green-700 text-white text-center py-3 sm:py-3.5 rounded-lg font-semibold transition text-sm sm:text-base">
                        Choose Plan
                    </a>
                </div>
                
                <!-- Family Plan (Featured) -->
                <div class="bg-gradient-to-b from-green-600 to-green-400 rounded-2xl p-5 sm:p-6 md:p-8 shadow-2xl card-hover md:transform md:scale-105 relative">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <span class="bg-white text-green-600 px-3 sm:px-4 py-1 rounded-full text-xs sm:text-sm font-bold">Most Popular</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-white mb-3 sm:mb-4 mt-3 sm:mt-4">Family Plan</h3>
                    <div class="mb-5 sm:mb-6">
                        <span class="text-3xl sm:text-4xl font-bold text-white">MWK 12,000</span>
                        <span class="text-sm sm:text-base text-white/90"> / month</span>
                    </div>
                    <ul class="space-y-3 sm:space-y-4 mb-6 sm:mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-white">Full Family Coverage</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-white">Consultations & Meds</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-white">24/7 Support</span>
                        </li>
                    </ul>
                    <a href="#contact" class="block w-full bg-white text-green-600 text-center py-3 sm:py-3.5 rounded-lg font-semibold hover:bg-gray-100 active:bg-gray-200 transition text-sm sm:text-base">
                        Choose Plan
                    </a>
                </div>
                
                <!-- Premium Plan -->
                <div class="bg-white rounded-2xl p-5 sm:p-6 md:p-8 shadow-lg border-2 border-blue-200 card-hover">
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">Premium Plan</h3>
                    <div class="mb-5 sm:mb-6">
                        <span class="text-3xl sm:text-4xl font-bold text-blue-600">MWK 20,000</span>
                        <span class="text-sm sm:text-base text-gray-600"> / month</span>
                    </div>
                    <ul class="space-y-3 sm:space-y-4 mb-6 sm:mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-500 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-gray-700">Specialist Care</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-500 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-gray-700">Hospital Benefits</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-500 mr-2 sm:mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-sm sm:text-base text-gray-700">Priority Service</span>
                        </li>
                    </ul>
                    <a href="#contact" class="block w-full bg-green-500 hover:bg-green-600 active:bg-green-700 text-white text-center py-3 sm:py-3.5 rounded-lg font-semibold transition text-sm sm:text-base">
                        Choose Plan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-12 sm:py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10 sm:mb-12 md:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4 px-2">How It Works</h2>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 sm:gap-10 md:gap-12 max-w-5xl mx-auto">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-20 md:h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-5 md:mb-6">
                        <span class="text-white text-2xl sm:text-3xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 sm:mb-3">Choose Your Plan</h3>
                    <p class="text-sm sm:text-base text-gray-600">Pick the best plan for you.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-20 md:h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-5 md:mb-6">
                        <span class="text-white text-2xl sm:text-3xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 sm:mb-3">Register Your Details</h3>
                    <p class="text-sm sm:text-base text-gray-600">Fill in your information easily.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-20 md:h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-5 md:mb-6">
                        <span class="text-white text-2xl sm:text-3xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-2 sm:mb-3">Access Healthcare</h3>
                    <p class="text-sm sm:text-base text-gray-600">Start using your medical benefits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Get In Touch Section -->
    <section id="contact" class="py-12 sm:py-16 md:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 items-center">
                <!-- Left Side - Form -->
                <div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4">Get In Touch</h2>
                    <p class="text-base sm:text-lg md:text-xl text-blue-600 mb-6 sm:mb-8">Ready to Get Started? Contact us to protect your health today.</p>
                    
                    <form class="space-y-4 sm:space-y-5 md:space-y-6">
                        <div>
                            <input type="text" placeholder="Full Name" class="w-full px-4 py-3.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition text-base">
                        </div>
                        <div>
                            <input type="tel" placeholder="Phone Number" class="w-full px-4 py-3.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition text-base">
                        </div>
                        <div>
                            <input type="text" placeholder="Location" class="w-full px-4 py-3.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition text-base">
                        </div>
                        <div>
                            <textarea placeholder="Your Message" rows="5" class="w-full px-4 py-3.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition resize-none text-base"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-green-500 text-white px-6 sm:px-8 py-3.5 sm:py-4 rounded-lg font-semibold text-base sm:text-lg hover:shadow-lg active:opacity-90 transition">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Right Side - Image/Illustration -->
                <div class="hidden lg:block">
                    <div class="bg-gradient-to-br from-blue-100 to-green-100 rounded-2xl p-12 h-full flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-64 h-64 mx-auto text-blue-600 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 sm:py-10 md:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-3 sm:mb-4">
                        <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-lg bg-gradient-to-br from-blue-600 to-green-500">
                            <span class="text-white font-bold text-sm sm:text-base">CDS</span>
                        </div>
                        <span class="font-bold text-base sm:text-lg">CDS Medical Scheme</span>
                    </div>
                    <p class="text-sm sm:text-base text-gray-400">Affordable Medical Scheme for All</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-3 sm:mb-4 text-sm sm:text-base">Quick Links</h4>
                    <ul class="space-y-1.5 sm:space-y-2 text-sm sm:text-base text-gray-400">
                        <li><a href="#home" class="hover:text-white transition block py-1">Home</a></li>
                        <li><a href="#plans" class="hover:text-white transition block py-1">Plans</a></li>
                        <li><a href="#benefits" class="hover:text-white transition block py-1">Benefits</a></li>
                        <li><a href="#contact" class="hover:text-white transition block py-1">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3 sm:mb-4 text-sm sm:text-base">Contact</h4>
                    <ul class="space-y-1.5 sm:space-y-2 text-sm sm:text-base text-gray-400">
                        <li>Chinsapo & Mtandire</li>
                        <li>Malawi</li>
                        <li>Email: info@cdsmedical.com</li>
                        <li>Phone: +265 XXX XXX XXX</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-6 sm:mt-8 pt-6 sm:pt-8 text-center text-sm sm:text-base text-gray-400">
                <p>&copy; {{ date('Y') }} CDS Medical Scheme. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-lg');
                nav.classList.remove('shadow-sm');
            } else {
                nav.classList.remove('shadow-lg');
                nav.classList.add('shadow-sm');
            }
        });
    </script>
</body>
</html>

