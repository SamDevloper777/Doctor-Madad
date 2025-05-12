<?php

namespace App\Livewire\Admin\Tenant;

use App\Models\Tenant;
use Livewire\Attributes\Layout;
use Livewire\Component;

class TenantList extends Component
{
    #[Layout('components.layouts.admin')]
    public function render()
    { 
         $tenants = Tenant::with('domains')->get();
   
        return view('livewire.admin.tenant.tenant-list');
    }
}
