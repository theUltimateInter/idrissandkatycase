<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Crée une nouvelle instance de ContactMail.
     *
     * @param  array  $data Les données à inclure dans le courriel.
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    use App\Events\ProductEvent;
    /**
     * Construit le message électronique.
     *
     * @return $this
     */
    public function build()
    {
        // Retourne la vue 'emails.contact' avec les données et défini le sujet du courriel.
        return $this->view('emails.contact')->subject('Nouveau message de contact');
    }
}
