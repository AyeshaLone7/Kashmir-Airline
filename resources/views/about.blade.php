@extends('layouts.app')

@section('title', 'About Us & Our Fleet - Kashmir Airlines')

@section('content')
<!-- Header Banner -->
<div class="relative h-[50vh] bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/cockpit.jpg') }}');">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 text-center">
        <h1 class="text-4xl font-bold text-white mb-2">ABOUT KASHMIR AIRLINES</h1>
        <p class="text-gray-300 text-sm">Connecting You To The Majestic Northern Heights</p>
    </div>
</div>

<!-- Fleet Section -->
<div class="max-w-6xl mx-auto py-16 px-6">
    <h2 class="text-3xl font-bold text-center mb-12 border-b border-maroon/30 pb-4">OUR MODERN FLEET</h2>

    <div class="grid md:grid-cols-2 gap-8">
        <!-- Fleet Card 1 -->
        <div class="bg-cardbg border border-maroon/30 rounded-xl overflow-hidden">
            <img src="{{ asset('images/plane-a320.jpg') }}" alt="Airbus A320" class="w-full h-56 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold text-white mb-2">Airbus A320 VIP Regional</h3>
                <ul class="text-xs text-gray-400 space-y-2">
                    <li>• <strong>Capacity:</strong> 150 Luxury Seats</li>
                    <li>• <strong>Features:</strong> Extra Legroom, Quiet Engines, In-flight HD Screens</li>
                    <li>• <strong>Routes:</strong> Islamabad, Skardu, Gilgit & Srinagar</li>
                </ul>
            </div>
        </div>

        <!-- Fleet Card 2 -->
        <div class="bg-cardbg border border-maroon/30 rounded-xl overflow-hidden">
            <img src="{{ asset('images/plane-jet.jpg') }}" alt="Gulfstream Jet" class="w-full h-56 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold text-white mb-2">Executive Gulfstream Private Jet</h3>
                <ul class="text-xs text-gray-400 space-y-2">
                    <li>• <strong>Capacity:</strong> 12 Exclusive VIP Seats</li>
                    <li>• <strong>Features:</strong> Lie-flat Beds, Gourmet Dining, Dedicated Personal Crew</li>
                    <li>• <strong>Services:</strong> VIP Charters & Private Corporate Flights</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Luxury Cabin Experience Section -->
<div class="py-16 px-6 max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-6 text-white">LUXURY CABIN EXPERIENCE</h2>
    <div class="bg-cardbg border border-maroon/30 rounded-xl overflow-hidden p-6">
        <img src="{{ asset('images/fleet-tarmac.jpg') }}" alt="Luxury Cabin" class="w-full h-80 object-cover rounded-lg mb-4">
        <p class="text-gray-300 text-sm text-center">
            Enjoy our plush leather seating, ambient blue mood lighting, and personal entertainment screens designed for your ultimate comfort.
        </p>
    </div>
</div>
@endsection