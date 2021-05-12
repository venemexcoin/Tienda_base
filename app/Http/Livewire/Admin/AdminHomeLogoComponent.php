<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeLogo;

class AdminHomeLogoComponent extends Component
{
    public function render()
    {
        $logos = HomeLogo::all();
        return view('livewire.admin.admin-home-logo-component',['logos' => $logos])->layout('layouts.base');
    }
}
