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
   
    public function mount()
    {
        $homeLogo = HomeLogo::find(1);
        if($homeLogo)
        {
            $this->name = $homeLogo->name;
            $this->link = $homeLogo->link;
           
        }  
    }   
    
    public function updated($fields)
    {
        $this->validate([
            'name' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,svg,jpg,png|max:512',
        ]);
    }

    public function saveLogo()
    {
       
        $this->validate([
            'name' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,svg,jpg,png|max:512',
        ]);

        $homeLogo = HomeLogo::find(1);
        if(!$homeLogo)
        {
            $homeLogo = new HomeLogo();
        }

        $homeLogo->name  = $this->name;
        $homeLogo->link  = $this->link;
        $imagename = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('Logo',$imagename);
        $homeLogo->image = $imagename;
        $homeLogo->save();
        session()->flash('message','Logo has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-logo-component')->layout('layouts.base');
    }
}
