@extends('layouts.app')

@section('title', 'Home - Kashmir Airlines')

@section('content')
<!-- Hero Section -->
<div class="relative h-[80vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');">
    <div class="absolute inset-0 bg-black/60"></div>
    
    <div class="relative z-10 text-center max-w-4xl px-4">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-wide text-white mb-4">
            FLY TO THE SKIES OF KASHMIR
        </h1>
        <p class="text-gray-300 text-lg mb-8">
            Experience unmatchable luxury, world-class comfort, and scenic views over majestic mountains.
        </p>

        <!-- Search Box -->
        <form action="{{ route('flights.search') }}" method="GET" class="bg-cardbg/95 border border-maroon/40 p-6 rounded-2xl shadow-2xl flex flex-wrap md:flex-nowrap gap-4">
            <div class="w-full text-left">
                <label class="block text-xs text-gray-400 mb-1">From</label>
                <input type="text" name="from_city" placeholder="e.g. Islamabad" class="w-full bg-black/80 border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none">
            </div>
            <div class="w-full text-left">
                <label class="block text-xs text-gray-400 mb-1">To</label>
                <input type="text" name="to_city" placeholder="e.g. Skardu" class="w-full bg-black/80 border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none">
            </div>
            <div class="w-full md:w-auto flex items-end">
                <button type="submit" class="w-full bg-maroon hover:bg-darkmaroon text-white font-semibold px-8 py-2.5 rounded-lg transition">
                    Search
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Luxury Cabin Showcase Section -->
<section class="bg-[#0B0B0B] py-16 px-4 sm:px-6 lg:px-8 border-t border-[#7A1C2E]/30">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
        <!-- Left Side: Image with Maroon Border Glow Effect -->
        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-[#7A1C2E] to-amber-600 rounded-2xl blur opacity-30 group-hover:opacity-60 transition duration-500"></div>
            <div class="relative rounded-2xl overflow-hidden border border-[#7A1C2E]/50 shadow-2xl bg-[#121212]">
                <img src="{{ asset('images/cabinn.jpeg') }}" alt="Kashmir Airlines Luxury Cabin" class="w-full h-[350px] sm:h-[420px] object-cover transform group-hover:scale-105 transition duration-700">
            </div>
        </div>

        <!-- Right Side: Text & Brand Details -->
        <div class="text-left space-y-6">
            <span class="bg-[#7A1C2E]/20 text-[#7A1C2E] border border-[#7A1C2E]/40 text-xs px-4 py-1.5 rounded-full uppercase font-bold tracking-widest">
                Elite Aviation
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-wide leading-tight">
                Unmatched Luxury In Every <span class="text-[#7A1C2E]">Flight</span>
            </h2>
            <p class="text-gray-400 text-sm sm:text-base leading-relaxed">
                Step aboard Kashmir Airlines and experience private jet-style comfort. Our custom-designed cabins offer plush leather seating, private dining spaces, and a tranquil atmosphere as you journey to the roof of the world.
            </p>
            
            <div class="grid grid-cols-2 gap-4 pt-2">
                <div class="border-l-2 border-[#7A1C2E] pl-4">
                    <h4 class="text-white font-bold text-lg">First-Class</h4>
                    <p class="text-gray-400 text-xs">Reclining luxury suites</p>
                </div>
                <div class="border-l-2 border-[#7A1C2E] pl-4">
                    <h4 class="text-white font-bold text-lg">Private Dining</h4>
                    <p class="text-gray-400 text-xs">Gourmet inflight meals</p>
                </div>
            </div>

            <div class="pt-4">
                <a href="{{ route('flights.search') }}" class="inline-block bg-[#7A1C2E] hover:bg-[#5e1522] text-white font-semibold px-8 py-3 rounded-xl shadow-lg transition duration-300">
                    Explore Flights
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Features Section -->
<div class="py-16 px-6 max-w-6xl mx-auto">
    <h2 class="text-2xl font-bold text-center mb-12 text-white">WHY CHOOSE KASHMIR AIR</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-cardbg border border-maroon/30 p-6 rounded-xl text-center">
            <div class="text-maroon text-3xl mb-3">🛡️</div>
            <h3 class="font-bold text-lg mb-2">100% Safe Flights</h3>
            <p class="text-xs text-gray-400">Strict safety procedures and highly trained international pilots.</p>
        </div>
        <div class="bg-cardbg border border-maroon/30 p-6 rounded-xl text-center">
            <div class="text-maroon text-3xl mb-3">👑</div>
            <h3 class="font-bold text-lg mb-2">Luxury Cabin</h3>
            <p class="text-xs text-gray-400">Plush leather seating, gourmet meals, and ambient lighting.</p>
        </div>
        <div class="bg-cardbg border border-maroon/30 p-6 rounded-xl text-center">
            <div class="text-maroon text-3xl mb-3">⏰</div>
            <h3 class="font-bold text-lg mb-2">Always On-Time</h3>
            <p class="text-xs text-gray-400">Guaranteed scheduled departures with zero unnecessary delays.</p>
        </div>
    </div>
</div>
@endsection