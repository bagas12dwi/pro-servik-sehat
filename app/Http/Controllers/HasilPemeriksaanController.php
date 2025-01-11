<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\HealthCenter;
use Illuminate\Http\Request;

class HasilPemeriksaanController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('user_id', auth()->user()->id)->where('status_form', 2)->get();
        return view('user.hasil-pemeriksaan.index', [
            'title' => 'Hasil Pemeriksaan',
            'bookings' => $bookings
        ]);
    }

    public function show(Booking $booking)
    {
        return view('user.hasil-pemeriksaan.show', [
            'title' => 'Detail Booking',
            'data' => $booking,
            'selectedLocation' => $booking->location,
            'locations' => HealthCenter::all(),
            'action' => 'show'
        ]);
    }
}
