<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookingsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Booking::where('status_form', '!=', '2')->get()->map(function ($booking) {
            return [
                'No. Booking' => $booking->document_no,
                'Nama Pasien' => $booking->name,
                'NIK' => $booking->nik,
                'No. Telepon' => $booking->phone_number,
                'Tempat, Tanggal Lahir' => $booking->place_of_birth . ', ' . date('d F Y', strtotime($booking->birth_date)),
                'Tanggal Booking' => date('d F Y h:i', strtotime($booking->inspection_date)),
                'Alamat Domisili' => $booking->address,
                'RT/RW' => $booking->area_code,
                'Desa/Kelurahan' => $booking->subdistrict,
                'Kecamatan' => $booking->district,
                'Kabupaten/Kota' => $booking->city,
                'Provinsi' => $booking->province,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'No. Booking',
            'Nama Pasien',
            'NIK',
            'No. Telepon',
            'Tempat, Tanggal Lahir',
            'Tanggal Booking',
            'Alamat Domisili',
            'RT/RW',
            'Desa/Kelurahan',
            'Kecamatan',
            'Kabupaten/Kota',
            'Provinsi'
        ];
    }
}
