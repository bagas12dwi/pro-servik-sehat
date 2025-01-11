<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BreastExamination;
use App\Models\GinekologiExamination;
use App\Models\Krioterapi;
use Illuminate\Http\Request;

class FormulirAdminController extends Controller
{
    public function index($bookingId)
    {
        try {
            $booking = Booking::findOrFail($bookingId);
            if ($booking->status_form != 2) {
                return view('admin.pages.formulir.index', [
                    'title' => 'Formulir',
                    'booking' => $booking,
                    'action' => 'create'
                ]);
            } else {
                return redirect()->route('finish')->with('error', 'Anda sudah mengisi formulir !');
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('home');
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedDataBreast = $request->validate([
                'user_id'  => 'nullable',
                'kulit_kanan_desc'  => 'nullable',
                'kulit_kanan'  => 'nullable',
                'aerola_kanan'  => 'nullable',
                'benjolan_kanan'  => 'nullable',
                'benjolan_kanan_desc'  => 'nullable',
                'melekat_kanan'  => 'nullable',
                'gambar_payudara_kanan'  => 'nullable',
                'kulit_kiri'  => 'nullable',
                'kulit_kiri_desc'  => 'nullable',
                'aerola_kiri'  => 'nullable',
                'benjolan_kiri'  => 'nullable',
                'benjolan_kiri_desc'  => 'nullable',
                'melekat_kiri'  => 'nullable',
                'gambar_payudara_kiri'  => 'nullable',
                'sadanis'  => 'nullable',
            ]);

            $validatedDataGinekologi = $request->validate([
                'vulva' => 'nullable',
                'vulva_desc' => 'nullable',
                'vagina' => 'nullable',
                'vagina_desc' => 'nullable',
                'serviks' => 'nullable',
                'ssk' => 'nullable',
                'pap_smear' => 'nullable',
                'hasil' => 'nullable',
                'hasil_desc' => 'nullable',
                'ims' => 'nullable',
                'rujuk' => 'nullable',
                'rujuk_desc' => 'nullable',
                'bimanual' => 'nullable',
                'gambar_ssk' => 'nullable',
            ]);

            $validatedDataKrioterapi = $request->validate([
                'kriotip' => 'nullable',
                'antibiotik' => 'nullable',
                'antibiotik_desc' => 'nullable',
                'kemungkinan' => 'nullable',
                'kemungkinan_desc' => 'nullable',
            ]);

            if ($request->hasFile('gambar_payudara_kanan')) {
                $validatedDataBreast['gambar_payudara_kanan'] = $request->file('gambar_payudara_kanan')->store('pemeriksaan-payudara');
            }

            if ($request->hasFile('gambar_payudara_kiri')) {
                $validatedDataBreast['gambar_payudara_kiri'] = $request->file('gambar_payudara_kiri')->store('pemeriksaan-payudara');
            }

            if ($request->hasFile('gambar_ssk')) {
                $validatedDataGinekologi['gambar_ssk'] = $request->file('gambar_ssk')->store('pemeriksaan-ssk');
            }
            $bookingId = $request->booking_id;

            $validatedDataBreast['booking_id'] = $bookingId;
            $validatedDataGinekologi['booking_id'] = $bookingId;
            $validatedDataKrioterapi['booking_id'] = $bookingId;

            $validatedDataBreast['user_id'] = auth()->user()->id ?? 1;
            $validatedDataGinekologi['user_id'] = auth()->user()->id ?? 1;
            $validatedDataKrioterapi['user_id'] = auth()->user()->id ?? 1;

            BreastExamination::create($validatedDataBreast);
            GinekologiExamination::create($validatedDataGinekologi);
            Krioterapi::create($validatedDataKrioterapi);

            Booking::where('id', $bookingId)->update([
                'status_form' => 2,
            ]);

            return redirect()->route('print', $bookingId)->with('success', 'Formulir Berhasil Disimpan');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('finish')->with('error', 'Terjadi kesalahan !');
        }
    }
}
