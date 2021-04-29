<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;

class UserContactactComponent extends Component
{
    Public $name;
    public $email;
    public $title;
    public $comment;
    

   

    public function sendEmail()
    {
        $this->validate([

            'name'    => 'required',
            'email'   => 'required|email',
            'title'   => 'required',
            'comment' => 'required'
        ]);


        $details = [
            'user'    => Auth::user()->name,
            'name'    => $this->name,
            'email'   => $this->email,
            'title'   => $this->title,
            'comment' => $this->comment
            

        ];

        Mail::to("chamocelldeveloper@gmail.com")->send(new TestMail($details));
        session()->flash('message','Email has been sent successfully!');
        
    }

    public function render()
    {
        return view('livewire.user.user-contactact-component')->layout('layouts.base');
    }
}
