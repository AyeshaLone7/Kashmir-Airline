<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id', 'passenger_name', 'passport_or_cnic', 'phone', 'email', 'pnr_code', 'status'
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}