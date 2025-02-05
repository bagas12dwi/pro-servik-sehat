<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Booking;
use App\Models\NotifiUser;
use App\Models\Testimonial;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.navbar', function ($view) {

            $bookingDate = Booking::where('user_id', auth()->user()->id ?? '')
                ->orderBy('inspection_date', 'desc') // Mengurutkan berdasarkan tanggal terbaru
                ->pluck('inspection_date')
                ->first();

            $notif = NotifiUser::where('user_id', auth()->user()->id ?? '')->orderBy('created_at', 'desc')->get();
            $view->with('bookingDate', $bookingDate);
            $view->with('notif', $notif);
        });
    }
}
