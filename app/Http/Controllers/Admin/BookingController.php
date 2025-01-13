<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\HealthCenter;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $query = Booking::where('status_form', '!=', '2');

        // Apply search filter
        if ($request->has('searchorders') && $request->searchorders) {
            $query->where('name', 'like', '%' . $request->searchorders . '%')
                ->orWhere('document_no', 'like', '%' . $request->searchorders . '%')
                ->orWhere('nik', 'like', '%' . $request->searchorders . '%');
        }

        // Apply year filter
        if ($request->has('year') && $request->year) {
            $query->whereYear('created_at', $request->year);
        }

        // Fetch distinct years for filtering
        $years = Booking::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        $bookings = $query->orderby('created_at', 'desc')->paginate(10);
        return view('admin.pages.booking.index', [
            'title' => 'Booking',
            'bookings' => $bookings,
            'years' => $years
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
