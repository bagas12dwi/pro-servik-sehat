<?php

namespace App\Http\Controllers;

use App\Helpers\UrlHelper;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class PrintController extends Controller
{
    public function formulir(Booking $booking)
    {
        $logokemenkes = URL::asset('/assets/img/logo_kemenkes.png');
        // $logokemenkes = UrlHelper::getUrl() . '/assets/img/logo_kemenkes.png';
        $pdf = Pdf::loadView('print.formulir', [
            'title' => 'Cetak Formulir',
            'booking' => $booking->load(['identityHistory', 'kesehatan', 'keluarga', 'keluhan', 'breastExamination', 'ginekologiExamination', 'krioterapi']),
            'logokemenkes' => $logokemenkes
        ]);

        return $pdf->stream();
    }
}
