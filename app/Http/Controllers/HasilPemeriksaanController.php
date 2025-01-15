<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\HealthCenter;
use App\Models\ResultFormUpdate;
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
        $resultFormUpdate = ResultFormUpdate::where('booking_id', $booking->id)->orderBy('updated_at', 'DESC')->get();
        $updated = [
            '0' => $resultFormUpdate->where('result_form', 0)->first(),
            '1' => $resultFormUpdate->where('result_form', 1)->first(),
            '2' => $resultFormUpdate->where('result_form', 2)->first(),
            '3' => $resultFormUpdate->where('result_form', 3)->first(),
            '4' => $resultFormUpdate->where('result_form', 4)->first(),
            '5' => $resultFormUpdate->where('result_form', 5)->first(),
        ];

        return view('user.hasil-pemeriksaan.show', [
            'title' => 'Detail Booking',
            'data' => $booking,
            'selectedLocation' => $booking->location,
            'locations' => HealthCenter::all(),
            'action' => 'show',
            'updated' => $updated
        ]);
    }
}
