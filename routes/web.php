<?php

use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Tenant\AddTenant;
use App\Livewire\Admin\Tenant\TenantList;
use Illuminate\Support\Facades\Route;



foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::view('/', 'welcome');
       Route::get('/dashboard',Dashboard::class)->name('admin.dashboard');
       Route::get('/tenants', TenantList::class)->name('admin.tenants');
       Route::get('/tenants/add', AddTenant::class)->name('admin.tenants.add');
    });
}


