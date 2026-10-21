@extends('layouts.app')

@section('title', 'E-Ticket - Kashmir Airlines')

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4">
    <!-- Ticket Card -->
    <div class="bg-cardbg border-2 border-maroon rounded-2xl shadow-2xl overflow-hidden text-white relative">
        
        <!-- Header Banner -->
        <div class="bg-maroon px-8 py-5 flex justify-between items-center border-b border-darkmaroon">
            <div>
                <h1 class="text-2xl font-extrabold tracking-widest text-white">KASHMIR AIRLINES</h1>
                <p class="text-xs text-gray-200 uppercase tracking-widest">Boarding Pass / E-Ticket</p>
            </div>
            <div class="text-right">
                <span class="text-xs uppercase text-gray-300 block">PNR Code</span>
                <span class="text-xl font-mono font-bold tracking-wider text-yellow-400">{{ $booking->pnr_code }}</span>
            </div>
        </div>

        <!-- Ticket Body -->
        <div class="p-8 grid md:grid-cols-3 gap-6 items-center">
            
            <!-- Flight Main Info -->
            <div class="md:col-span-2 space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-xs text-gray-400 uppercase">Passenger Name</p>
                        <p class="text-lg font-bold text-white">{{ $booking->passenger_name }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase">CNIC / Passport</p>
                        <p class="text-sm font-semibold text-gray-200">{{ $booking->passport_or_cnic }}</p>
                    </div>
                </div>

                <div class="border-t border-b border-gray-800 py-4 flex justify-between items-center">
                    <div>
                        <p class="text-xs text-gray-400 uppercase">From</p>
                        <p class="text-2xl font-black text-maroon">{{ $booking->flight->from_city }}</p>
                    </div>
                    <div class="text-gray-500 font-bold text-xl">✈</div>
                    <div class="text-right">
                        <p class="text-xs text-gray-400 uppercase">To</p>
                        <p class="text-2xl font-black text-maroon">{{ $booking->flight->to_city }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-2 text-xs">
                    <div>
                        <p class="text-gray-400">Flight No</p>
                        <p class="font-bold text-white text-sm">{{ $booking->flight->flight_number }}</p>
                    </div>
                    <div>
                        <p class="text-gray-400">Departure</p>
                        <p class="font-bold text-white text-sm">{{ $booking->flight->departure_time }}</p>
                    </div>
                    <div>
                        <p class="text-gray-400">Status</p>
                        <p class="font-bold text-green-400 text-sm">{{ $booking->status }}</p>
                    </div>
                </div>
            </div>

            <!-- Ticket Side Coupon / Stamp -->
            <div class="border-t md:border-t-0 md:border-l border-dashed border-gray-700 pt-6 md:pt-0 md:pl-6 flex flex-col justify-between items-center text-center space-y-4">
                <div class="w-full bg-black/60 p-4 rounded-xl border border-gray-800">
                    <p class="text-xs text-gray-400 mb-1">Class</p>
                    <p class="text-sm font-bold text-white uppercase">First Class VIP</p>
                </div>

                <div class="w-full bg-black/60 p-4 rounded-xl border border-gray-800">
                    <p class="text-xs text-gray-400 mb-1">Total Fare</p>
                    <p class="text-lg font-extrabold text-yellow-400">PKR {{ number_format($booking->flight->price) }}</p>
                </div>

                <button onclick="window.print()" class="w-full bg-maroon hover:bg-darkmaroon text-white text-xs font-bold py-2.5 rounded-lg transition shadow-lg">
                    🖨️ Print Ticket
                </button>
            </div>

        </div>

    </div>
</div>
@endsection