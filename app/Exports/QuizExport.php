<?php

namespace App\Exports;

use App\Models\ResultQuiz;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuizExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ResultQuiz::all()->map(function ($result) {
            return [
                'No. ' => $result->id,
                'Nama' => $result->nama,
                'Alamat' => $result->alamat,
                'Jawaban Benar' => $result->score
            ];
        });
    }

    public function headings(): array
    {
        return [
            'No. ',
            'Nama',
            'Alamat',
            'Jawaban Benar'
        ];
    }
}
