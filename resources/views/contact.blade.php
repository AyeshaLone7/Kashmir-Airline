@extends('layouts.app')

@section('title', 'Contact Us - Kashmir Airlines')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-6 grid md:grid-cols-2 gap-12 items-center">
    <!-- Left: Contact Form -->
    <div class="bg-cardbg border border-maroon/30 p-8 rounded-xl">
        <h2 class="text-2xl font-bold mb-6 border-b border-maroon/30 pb-2">Send Us A Message</h2>
            <form action="{{ route('contact.send') }}" method="POST">
    @csrf
            <div>
                <label class="block text-xs text-gray-400 mb-1">Your Name</label>
                <input type="text" name="name" class="w-full bg-black border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none">
            </div>
            <div>
                <label class="block text-xs text-gray-400 mb-1">Your Email</label>
                <input type="email" name="email" class="w-full bg-black border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none">
            </div>
            <div>
                <label class="block text-xs text-gray-400 mb-1">Message</label>
                <textarea name="message" rows="4" class="w-full bg-black border border-gray-700 focus:border-maroon px-4 py-2 rounded-lg text-sm text-white outline-none"></textarea>
            </div>
            <button type="submit" class="w-full bg-maroon hover:bg-darkmaroon text-white font-bold py-2.5 rounded-lg transition">
                Send Message
            </button>
        </form>
    </div>

    <!-- Right: Office Info & Image -->
    <div>
        <img src="{{ asset('images/contact-bg.jpeg') }}" alt="Global Contact Center" class="rounded-xl border border-maroon/30 mb-6 shadow-xl">
        <h3 class="text-xl font-bold text-white mb-2">Global Contact Center</h3>
        <p class="text-xs text-gray-400 mb-4">Our dedicated support team is available 24/7 for booking inquiries and corporate charters.</p>
        <ul class="text-sm space-y-2">
            <li>📍 <strong>Address:</strong> Airport Road, Islamabad / Srinagar Avenue</li>
            <li>📞 <strong>Helpline:</strong> +92 (51) 111-KASHMIR</li>
            <li>✉️ <strong>Email:</strong> info@kashmirairlines.com</li>
        </ul>
    </div>
</div>
@endsection