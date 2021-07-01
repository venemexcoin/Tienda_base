<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;



class MovilMenuComponent extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.movil-menu-component', ['users' => $users]);
    }
}
