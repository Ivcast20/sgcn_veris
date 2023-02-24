<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class NewUserMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $usuario;
    public $password;
    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $usuario, $password, $url)
    {
        $this->usuario = $usuario;
        $this->password = $password;
        $this->url = $url;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('verissgcn@gmail.com', 'VERIS SGCN'),
            subject: 'Credenciales SGCN_VERIS',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.newUser',
            with: [
                'link_pagina' => $this->url,
                'usuario' => $this->usuario,
                'password' => $this->password,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
