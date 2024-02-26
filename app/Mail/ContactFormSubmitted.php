<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Livewire\Livewire;
use Illuminate\Contracts\View\View;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;

    }

    public function build()
    {
        // Render the Livewire component's view
        $livewireView = view('livewire.contact')->render();

        return $this->from($this->email)
                    ->subject('Contact Form Submission')
                    ->view('emails.contact-form-submitted', [
                        'name' => $this->name,
                        'email' => $this->email,
                        'messageContent' => $this->message,
                        'livewireView' => $livewireView, // Pass the rendered view
                    ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form Submitted',
        );
    }

    /**
     * Get the message content definition.
     */

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
