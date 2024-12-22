<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
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
        $webDetails = Setting::latest()->first();
        $year = date('Y');
        // dd($year);
        view()->share([
            'webDetails' => $webDetails,
            'year' => $year,
        ]);
    }
}
