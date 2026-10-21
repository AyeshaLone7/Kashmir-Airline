<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kashmir Airlines')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        maroon: '#7A1C2E',
                        darkmaroon: '#5B111D',
                        darkbg: '#0B0B0B',
                        cardbg: '#141414'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-darkbg text-gray-100 font-sans flex flex-col min-h-screen">

    <!-- Header Navigation -->
     <br>
     
    <nav class="bg-black border-b border-maroon/30 sticky top-0 z-50 px-6 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wider text-white">
            KASHMIR<span class="text-maroon"> AIRLINE</span>
        </a>
        <div class="space-x-6 text-sm font-medium">
            <a href="{{ route('home') }}" class="hover:text-maroon transition">Home</a>
            <a href="{{ route('flights.search') }}" class="hover:text-maroon transition">Flights</a>
            <a href="{{ route('about') }}" class="hover:text-maroon transition">About Us</a>
            <a href="{{ route('contact') }}" class="hover:text-maroon transition">Contact Us</a>
        </div>
        <div>
            <a href="{{ route('flights.search') }}" class="bg-maroon hover:bg-darkmaroon text-white px-5 py-2 rounded-full text-sm font-semibold transition">
                Book Flight
            </a>
        </div>
    </nav>
    <br>
    <br>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="bg-maroon text-white px-6 py-3 text-center font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <!-- Main Dynamic Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black border-t border-maroon/30 py-8 text-center text-xs text-gray-400">
        <p>&copy; 2026 Kashmir Airlines. All Rights Reserved. Pure Luxury Above Clouds.</p>
    </footer>

</body>
</html>