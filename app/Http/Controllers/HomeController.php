<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bookingDate = Booking::where('user_id', auth()->user()->id ?? '')
            ->orderBy('inspection_date', 'desc') // Mengurutkan berdasarkan tanggal terbaru
            ->pluck('inspection_date')
            ->first();

        $testimonials = Testimonial::orderBy('testimonial_date', 'desc')->get();

        return view('welcome', [
            'title' => 'Home',
            'bookingDate' => $bookingDate ?? '',
            'testimonials' => $testimonials
        ]);
    }
}
