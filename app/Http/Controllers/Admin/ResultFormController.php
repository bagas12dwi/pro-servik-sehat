<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\HealthCenter;
use Illuminate\Http\Request;

class ResultFormController extends Controller
{
    public function index()
    {
        $booking = Booking::where('status_form', '2')->orderby('created_at', 'desc')->paginate(10);
        return view('admin.pages.hasil-pemeriksaan.index', [
            'title' => 'Hasil Pemeriksaan',
            'bookings' => $booking,
        ]);
    }

    public function show(Booking $booking)
    {
        return view('admin.pages.hasil-pemeriksaan.show', [
            'title' => 'Hasil Pemeriksaan',
            'data' => $booking,
            'selectedLocation' => $booking->location,
            'locations' => HealthCenter::all(),
            'action' => 'show'
        ]);
    }

    public function update(Request $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'result_form' => 'required'
        ]);

        Booking::where('id', $booking->id)->update($validatedData);
        return redirect()->route('admin.hasil-pemeriksaan')->with('success', 'Progress Sampel ' . $booking->name . ' berhasil di perbarui!');
    }
}
