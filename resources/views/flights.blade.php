@extends('layouts.app')

@section('title', 'Available Flights - Kashmir Airlines')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-6">
    <h1 class="text-3xl font-bold mb-8 border-b border-maroon/40 pb-4">Available Luxury Flights</h1>

    @if($flights->isEmpty())
        <div class="bg-cardbg border border-maroon/30 p-8 rounded-xl text-center">
            <p class="text-gray-400">No flights found for your search criteria. Please check back later or modify your search.</p>
        </div>
    @else
        <div class="space-y-4">
            @foreach($flights as $flight)
                <div class="bg-cardbg border border-maroon/30 hover:border-maroon p-6 rounded-xl flex flex-wrap md:flex-nowrap justify-between items-center gap-4 transition">
                    <div>
                        <span class="bg-maroon text-xs px-3 py-1 rounded-full font-bold uppercase">{{ $flight->flight_number }}</span>
                        <h3 class="text-xl font-semibold mt-2">{{ $flight->from_city }} ➔ {{ $flight->to_city }}</h3>
                        <p class="text-xs text-gray-400 mt-1">Departure: {{ $flight->departure_time }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-extrabold text-white">PKR {{ number_format($flight->price) }}</p>
                        <a href="{{ route('booking.form', $flight->id) }}" class="inline-block mt-2 bg-maroon hover:bg-darkmaroon text-white text-xs font-bold px-6 py-2 rounded-lg transition">
                            Book Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection