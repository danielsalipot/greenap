<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageReplyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $message_data;
    public $reply;
    public $subject;

    /**
     * Create a new message instance.
     */
    public function __construct($message_data, $reply, $subject)
    {
        $this->message_data = $message_data;
        $this->reply = $reply;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->attach(asset("assets/images/greenap-logo.png"), [
            'as' => 'header.png', // Specify the attachment's filename
            'mime' => 'image/jpeg', // Set the appropriate MIME type for the image
        ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.message-reply-email',
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
