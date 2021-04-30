<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use App\Mail\TestSuscription;

class SuscritionComponent extends Component
{
    public $suscrition;

    public function sendSuscription()
    {
        $this->validate([

            'suscrition'    => 'required|email'
        ]);


        $suscrition = [
            'suscrition'    => $this->suscrition

        ];

        Mail::to("chamocelldeveloper@gmail.com")->send(new TestSuscription($suscrition));
        session()->flash('message', 'Email has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.suscrition-component')->layout('layouts.base');
    }
}
