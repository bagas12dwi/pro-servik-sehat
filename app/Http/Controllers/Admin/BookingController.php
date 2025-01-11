<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\HealthCenter;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::where('status_form', '!=', '2')->orderby('created_at', 'desc')->paginate(10);
        return view('admin.pages.booking.index', [
            'title' => 'Booking',
            'bookings' => $booking,
        ]);
    }

    public function show(Booking $booking)
    {
        return view('admin.pages.booking.show', [
            'title' => 'Booking',
            'data' => $booking,
            'selectedLocation' => $booking->location,
            'locations' => HealthCenter::all(),
            'action' => 'show'
        ]);
    }

    public function showForm(Booking $booking)
    {
        return view('admin.pages.booking.form-pasien', [
            'title' => 'Formulir',
            'data' => $booking->load(['identityHistory', 'kesehatan', 'keluarga', 'keluhan']),
            'action' => 'show'
        ]);
    }
}
