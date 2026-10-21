<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
    use App\Models\ContactMessage;


class FlightController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $from = $request->input('from_city');
        $to = $request->input('to_city');

        $flights = Flight::when($from, function ($q) use ($from) {
            return $q->where('from_city', 'LIKE', "%{$from}%");
        })->when($to, function ($q) use ($to) {
            return $q->where('to_city', 'LIKE', "%{$to}%");
        })->get();

        return view('flights', compact('flights'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function showBookingForm($flight_id)
    {
        $flight = Flight::findOrFail($flight_id);
        return view('booking', compact('flight'));
    }

        public function storeBooking(Request $request)
    {
        $request->validate([
            'flight_id' => 'required|exists:flights,id',
            'passenger_name' => 'required|string|max:255',
            'passport_or_cnic' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $pnr = 'KA-' . strtoupper(Str::random(6));

        $booking = Booking::create([
            'flight_id' => $request->flight_id,
            'passenger_name' => $request->passenger_name,
            'passport_or_cnic' => $request->passport_or_cnic,
            'phone' => $request->phone,
            'email' => $request->email,
            'pnr_code' => $pnr,
            'status' => 'Confirmed'
        ]);

        // Direct ticket page par redirect karein
        return redirect()->route('booking.ticket', $booking->id);
    }

    public function showTicket($id)
    {
        $booking = Booking::with('flight')->findOrFail($id);
        return view('ticket', compact('booking'));
    }


public function storeContact(Request $request)
{
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    ContactMessage::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ]);

    return back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
}
    }
