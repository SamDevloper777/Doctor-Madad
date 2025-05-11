<?php

use App\Livewire\Admin\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;



foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::view('/', 'welcome');
       Route::get('/admin',Dashboard::class)->name('admin.dashboard');
    });
}


