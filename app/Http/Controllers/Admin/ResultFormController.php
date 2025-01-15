<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\UrlHelper;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\HealthCenter;
use App\Models\ResultFormUpdate;
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
            'result_form' => 'required',
            'document_path' => 'nullable'
        ]);

        if ($request->hasFile('document_path')) {
            $validatedData['document_path'] = $request->file('document_path')->store('dokumen-hasil-pemeriksaan');
        }

        Booking::where('id', $booking->id)->update($validatedData);
        ResultFormUpdate::create([
            'booking_id' => $booking->id,
            'result_form' => $validatedData['result_form']
        ]);

        $resultText = '';
        // 0 : Pengambilan Sampel
        // 1 : Pengiriman Sampel Ke Laborat
        // 2 : Analisa Sampel
        // 3 : Validasi Hasil Sampel
        // 4 : Informasi Hasil Sampel
        // 5 : Tindak Lanjut

        if ($validatedData['result_form'] == '0') {
            $resultText = 'Pengambilan Sampel';
        } elseif ($validatedData['result_form'] == 1) {
            $resultText = 'Pengiriman Sampel Ke Laborat';
        } elseif ($validatedData['result_form'] == 2) {
            $resultText = 'Analisa Sampel';
        } elseif ($validatedData['result_form'] == '3') {
            $resultText = 'Validasi Hasil Sampel';
        } elseif ($validatedData['result_form'] == '4') {
            $resultText = 'Informasi Hasil Sampel';
        } elseif ($validatedData['result_form'] == '5') {
            $resultText = 'Tindak Lanjut';
        }


        $message = "Halo, kami informasikan pasien *$booking->name* untuk hasil pemeriksaan anda sudah sampai tahap *$resultText*";

        $sendwa = UrlHelper::sendWA($booking->phone_number, $message);

        return redirect($sendwa);
        // session()->flash('whatsapp_link', $sendwa);
        return redirect()->route('admin.hasil-pemeriksaan')->with('success', 'Progress Sampel ' . $booking->name . ' berhasil di perbarui!');
    }
}
