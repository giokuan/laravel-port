<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;
use Mary\Traits\Toast;
use Livewire\Attributes\Rule;

class Contact extends Component
{
    use Toast;
    // public $loading = false;

    #[Rule('required', message: 'Yo, add your name')]
    public $name='';
    #[Rule('required', message: 'Yo, add your email')]
    public $email='';
    #[Rule('required', message: 'Yo, add a message')]
    public $message='';


    

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',

    ];

 
    public function submitForm()
    {
        $this->validate();
    

        // Send email
        Mail::to('giokuan@gmail.com')->send(new ContactFormSubmitted($this->name, $this->email, $this->message));

        // Clear form fields after submission
        $this->reset();
     
        // Show success message
        $this->success("Message Sent Successfully", 'Thank you!', 'toast-top toast-end');
        
    }

    
    public function render()
    {
        return view('livewire.contact');
    }
}
