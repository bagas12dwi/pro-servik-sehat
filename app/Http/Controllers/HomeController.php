<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Booking;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $testimonials = Testimonial::orderBy('testimonial_date', 'desc')->get();
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view('welcome', [
            'title' => 'Home',
            'testimonials' => $testimonials,
            'articles' => $articles
        ]);
    }
}
