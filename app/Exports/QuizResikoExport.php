<?php

namespace App\Exports;

use App\Models\ResultQuizResiko;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuizResikoExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ResultQuizResiko::all()->map(function ($result) {
            return [
                'No. ' => $result->id,
                'Nama' => $result->nama,
                'Alamat' => $result->alamat,
                'Jawaban Iya' => $result->jawaban_iya,
                'Jawaban Tidak' => $result->jawaban_tidak,
                'Hasil' => $result->hasil
            ];
        });
    }

    public function headings(): array
    {
        return [
            'No. ',
            'Nama',
            'Alamat',
            'Jawaban Iya',
            'Jawaban Tidak',
            'Hasil'
        ];
    }
}
