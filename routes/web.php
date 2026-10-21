<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

Route::get('/', [FlightController::class, 'home'])->name('home');
Route::get('/flights', [FlightController::class, 'search'])->name('flights.search');
Route::get('/about', [FlightController::class, 'about'])->name('about');
Route::get('/contact', [FlightController::class, 'contact'])->name('contact');

Route::get('/book/{flight_id}', [FlightController::class, 'showBookingForm'])->name('booking.form');
Route::get('/ticket/{id}', [FlightController::class, 'showTicket'])->name('booking.ticket');
Route::post('/contact/send', [FlightController::class, 'storeContact'])->name('contact.send');
Route::post('/book', [FlightController::class, 'storeBooking'])->name('booking.store');