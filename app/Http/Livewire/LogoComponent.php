<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeLogo;

class LogoComponent extends Component
{
    public function render()
    {
        $logo = HomeLogo::find(1);
        return view('livewire.logo-component',['logo' => $logo]);
    }
}
