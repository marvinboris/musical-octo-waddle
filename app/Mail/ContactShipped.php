<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Domotecs - Nouveau message de contact')
            ->from('infos@domotecs.cm', 'Domotecs')
            ->view('emails.contact')
            ->with([
                'name' => $this->contact['name'],
                'email' => $this->contact['email'],
                'object' => $this->contact['object'],
                'myMessage' => $this->contact['message'],
            ]);
    }
}
