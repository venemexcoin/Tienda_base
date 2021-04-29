<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;




class TestSuscription extends Mailable
{
    use Queueable, SerializesModels;

    public $suscrition;

    public $subject = 'Información de contacto';
    
    public $contacto = 'Hay un nuevo Suscriptor en la tienda';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($suscrition)
    {
        $this->suscrition = $suscrition;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('livewire.suscrition-component');
    }
}
