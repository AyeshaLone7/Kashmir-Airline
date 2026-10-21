<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightSeeder extends Seeder
{
    public function run(): void
    {
        Flight::create([
            'flight_number' => 'KA-101',
            'from_city' => 'Islamabad',
            'to_city' => 'Skardu',
            'departure_time' => '2026-10-25 08:00:00',
            'price' => 25000.00,
            'total_seats' => 150
        ]);

        Flight::create([
            'flight_number' => 'KA-102',
            'from_city' => 'Islamabad',
            'to_city' => 'Gilgit',
            'departure_time' => '2026-10-26 11:30:00',
            'price' => 22000.00,
            'total_seats' => 150
        ]);

        Flight::create([
            'flight_number' => 'KA-103',
            'from_city' => 'Lahore',
            'to_city' => 'Skardu',
            'departure_time' => '2026-10-27 14:00:00',
            'price' => 28000.00,
            'total_seats' => 150
        ]);
         Flight::create([
            'flight_number' => 'KA-104',
            'from_city' => 'Muzaffarabad',
            'to_city' => 'Islamabad',
            'departure_time' => '2026-11-27 14:00:00',
            'price' => 29000.00,
            'total_seats' => 150
        ]);
        Flight::create([
            'flight_number' => 'KA-105',
            'from_city' => 'Mirpur',
            'to_city' => 'Islamabad',
            'departure_time' => '2026-11-28 14:00:00',
            'price' => 20000.00,
            'total_seats' => 150
        ]);
        Flight::create([
            'flight_number' => 'KA-106',
            'from_city' => 'Hunza',
            'to_city' => 'Faislabad',
            'departure_time' => '2026-11-29 14:00:00',
            'price' => 40000.00,
            'total_seats' => 150
        ]);
        Flight::create([
            'flight_number' => 'KA-107',
            'from_city' => 'Kotli',
            'to_city' => 'Muzaffarabad',
            'departure_time' => '2026-10-30 14:00:00',
            'price' => 30000.00,
            'total_seats' => 150
        ]);
    }
}