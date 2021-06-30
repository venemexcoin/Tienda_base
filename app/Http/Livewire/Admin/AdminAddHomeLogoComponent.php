<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeLogo;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddHomeLogoComponent extends Component
{

    use WithFileUploads;
    public $name;
    public $link;
    public $image;
    public $imagename;


    public function saveLogo()
    {
        $logo = new HomeLogo();
        $logo->name  = $this->name;
        $logo->link  = $this->link;
        $imagename = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('Logo',$imagename);
        $logo->image = $this->imagename;
        $logo->save();
        session()->flash('message','Logo has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-logo-component')->layout('layouts.base');
    }
}
