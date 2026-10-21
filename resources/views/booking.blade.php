@extends('layouts.app')

@section('title', 'Passenger Booking - Kashmir Airlines')

@section('content')
<div class="max-w-2xl mx-auto py-16 px-6">
    <div class="bg-cardbg border border-maroon/30 p-8 rounded-xl">
        <h1 class="text-2xl font-bold mb-2">Passenger Information</h1>
        <p class="text-xs text-gray-400 mb-6">Flight: <strong class="text-white">{{ $flight->flight_number }}</strong> ({{ $flight->from_city }} ➔ {{ $flight->to_city }})</p>

        <form action="{{ route('booking.store') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="flight_id" value="{{ $flight->id }}">

            <div>
                <label class="block text-xs text-gray-400 mb-1">Full Passenger Name</label>
                <input type="text" name="passenger_name" required class="w-full bg-black border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none">
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1">CNIC / Passport Number</label>
                <input type="text" name="passport_or_cnic" required class="w-full bg-black border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none">
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1">Phone Number</label>
                <input type="text" name="phone" required class="w-full bg-black border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none">
            </div>

            <div>
                <label class="block text-xs text-gray-400 mb-1">Email Address</label>
                <input type="email" name="email" required class="w-full bg-black border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none">
            </div>

            <button type="submit" class="w-full bg-maroon hover:bg-darkmaroon text-white font-bold py-3 rounded-lg transition mt-4">
                Confirm & Generate Ticket (PNR)
            </button>
        </form>
    </div>
</div>
@endsection