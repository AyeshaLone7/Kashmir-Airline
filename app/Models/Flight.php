<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_number', 'from_city', 'to_city', 'departure_time', 'price', 'total_seats'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}