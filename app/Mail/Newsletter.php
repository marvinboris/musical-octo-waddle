<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Newsletter extends Mailable
{
    use Queueable, SerializesModels;

    public $newsletter;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newsletter)
    {
        //
        $this->newsletter = $newsletter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Domotecs - Nouvelle souscription à la newsletter')
            ->from('infos@domotecs.cm', 'Domotecs')
            ->view('emails.newsletter')
            ->with([
                'email' => $this->newsletter['email']
            ]);
    }
}
