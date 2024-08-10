<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;


class Supplier extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $fileName;
    /**
     * Create a new message instance.
     */
    public function __construct($data , $fileName)
    {
        //
        $this->data = $data;
        $this->fileName = $fileName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Supplier Record',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.supplier',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if($this->fileName){
            $attachments = [
                Attachment::fromPath(public_path("attachment/" . $this->fileName))->as($this->data->companyName .'.pdf')->withMime('application/pdf')
            ];
        }
        return $attachments;
    }
}
