<?php

namespace App\Livewire\Admin\Tenant;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AddTenant extends Component
{
     #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.tenant.add-tenant');
    }
}
