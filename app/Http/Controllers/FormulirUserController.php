<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Complaint;
use App\Models\FamilyHistory;
use App\Models\HealthHistory;
use App\Models\IdentityHistory;
use Illuminate\Http\Request;

class FormulirUserController extends Controller
{
    public function index($bookingId)
    {
        try {
            $booking = Booking::findOrFail($bookingId);
            if ($booking->user_id == auth()->user()->id) {  
                if ($booking->status_form == 0) {
                    return view('user.formulir.index', [
                        'title' => 'Formulir Pasien',
                        'booking' => $booking,
                    ]);
                } else {
                    return redirect()->route('finish')->with('error', 'Anda sudah mengisi formulir !');
                }
            } else {
                return redirect()->route('finish')->with('error', 'Anda tidak memiliki akses untuk mengisi formulir ini !');
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('home');
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedDataIdentity = $request->validate([
                'status_nikah_klien' => 'nullable',
                'status_nikah_klien_desc' => 'nullable',
                'status_nikah_suami' => 'nullable',
                'status_nikah_suami_desc' => 'nullable',
                'pendidikan_klien' => 'nullable',
                'pekerjaan_klien' => 'nullable',
                'pekerjaan_klien_desc' => 'nullable',
                'pekerjaan_suami' => 'nullable',
            ]);

            $validatedDataHealth = $request->validate([
                'usia_haid' => 'nullable',
                'usia_kawin' => 'nullable',
                'usia_hamil' => 'nullable',
                'konsumsi_alkohol' => 'nullable',
                'hpht' => 'nullable',
                'hpht_desc' => 'nullable',
                'melahirkan_normal' => 'nullable',
                'melahirkan_normal_desc' => 'nullable',
                'melahirkan_caesar' => 'nullable',
                'melahirkan_caesar_desc' => 'nullable',
                'keguguran' => 'nullable',
                'keguguran_desc' => 'nullable',
                'menyusui' => 'nullable',
                'menyusui_desc' => 'nullable',
                'kb_lama_tidak_pernah' => 'nullable',
                'kb_lama_pil' => 'nullable',
                'kb_lama_pil_desc' => 'nullable',
                'kb_lama_suntik' => 'nullable',
                'kb_lama_suntik_desc' => 'nullable',
                'kb_lama_sprial' => 'nullable',
                'kb_lama_kondom' => 'nullable',
                'kb_lama_lainnya' => 'nullable',
                'kb_lama_lainnya_desc' => 'nullable',
                'kb_sekarang_tidak_kb' => 'nullable',
                'kb_sekarang_pil' => 'nullable',
                'kb_sekarang_pil_desc' => 'nullable',
                'kb_sekarang_suntik' => 'nullable',
                'kb_sekarang_suntik_desc' => 'nullable',
                'kb_sekarang_spiral' => 'nullable',
                'kb_sekarang_susuk' => 'nullable',
                'kb_sekarang_kondom' => 'nullable',
                'kb_sekarang_lainnya' => 'nullable',
                'kb_sekarang_lainnya_desc' => 'nullable',
                'pap_smear' => 'nullable',
                'test_iva' => 'nullable',
                'merokok' => 'nullable',
                'merokok_desc' => 'nullable',
                'aktivitas' => 'nullable',
                'konsumsi' => 'nullable',
                'melahirkan' => 'nullable|boolean',
            ]);

            $validatedDataFamily = $request->validate([
                'tumor_jinak' => 'nullable',
                'saudara' => 'nullable',
                'saudara_desc' => 'nullable',
                'kanker' => 'nullable',
            ]);

            $validatedDataComplaint = $request->validate([
                'benjolan' => 'nullable',
                'cairan' => 'nullable',
                'keputihan' => 'nullable',
                'pendarahan' => 'nullable',
                'pendarahan_haid' => 'nullable',
                'sakit' => 'nullable',
                'keluhan' => 'nullable',
            ]);

            if (!isset($validatedDataHealth['melahirkan_normal']) || !$validatedDataHealth['melahirkan_normal']) {
                $validatedDataHealth['melahirkan_normal_desc'] = 0;
            }

            if (!isset($validatedDataHealth['melahirkan_caesar']) || !$validatedDataHealth['melahirkan_caesar']) {
                $validatedDataHealth['melahirkan_caesar_desc'] = 0;
            }

            if (!isset($validatedDataHealth['keguguran']) || !$validatedDataHealth['keguguran']) {
                $validatedDataHealth['keguguran_desc'] = 0;
            }

            $bookingId = $request->booking_id;

            $validatedDataIdentity['booking_id'] = $bookingId;
            $validatedDataHealth['booking_id'] = $bookingId;
            $validatedDataFamily['booking_id'] = $bookingId;
            $validatedDataComplaint['booking_id'] = $bookingId;

            // dd($validatedDataIdentity, $validatedDataHealth, $validatedDataFamily, $validatedDataComplaint);

            IdentityHistory::create($validatedDataIdentity);
            HealthHistory::create($validatedDataHealth);
            FamilyHistory::create($validatedDataFamily);
            Complaint::create($validatedDataComplaint);

            Booking::where('id', $bookingId)->update([
                'status_form' => 1,
            ]);
            
        } catch (\Throwable $th) {
            return throw $th;
        }

        return redirect()->route('finish')->with('success', 'Data Formulir berhasil disimpan !');
    }
}
