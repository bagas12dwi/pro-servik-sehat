<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\HealthCenter;
use Illuminate\Http\Request;

class ResultFormController extends Controller
{
    public function index(Request $request)
    {
        $query = Booking::where('status_form',  '2');

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
        return view('admin.pages.hasil-pemeriksaan.index', [
            'title' => 'Hasil Pemeriksaan',
            'bookings' => $bookings,
            'years' => $years
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
