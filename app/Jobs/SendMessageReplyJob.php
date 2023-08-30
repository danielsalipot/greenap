<?php

namespace App\Jobs;

use App\Mail\MessageReplyEmail;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMessageReplyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $message_data;
    protected $recipient;
    protected $subject;
    protected $reply;


    public function __construct($message_data, $recipient, $subject, $reply)
    {
        $this->message_data = $message_data;
        $this->recipient = $recipient;
        $this->subject = $subject;
        $this->reply = $reply;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->recipient)->send(new MessageReplyEmail($this->message_data, $this->subject, $this->reply));
    }
}
