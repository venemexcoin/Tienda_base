<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDashboardComponet extends Component
{
    
    public function render()
    {
        return view('livewire.user.user-dashboard-componet')->layout('layouts.base');
    }
}
