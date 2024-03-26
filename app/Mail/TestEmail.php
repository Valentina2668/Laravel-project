<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public  $data;
  public  function __construct($data)
  {
    $this->data  =  $data;
  }
  public  function build()
  {
    $address  = 'Valentinahc2668@mail.ru';
    $subject  = 'This is a demo!';
    $name  = 'Valya';
    return  $this->view('emails.test')
      ->from($address, $name)
      ->cc($address, $name)
      ->bcc($address, $name)
      ->replyTo($address, $name)
      ->subject($subject)
      ->with([ 'test_message' =>  $this->data['message'] ]);
  }
    
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Test Email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.test',
        );
    }

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
