<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryReplyEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $firstname;
    public $secondname;
    public $reply;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstname,$secondname,$reply)
    {
        $this->firstname = $firstname;
        $this->secondname = $secondname;
        $this->reply = $reply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.EnquiryReply')->with(['firstname'=>$this->firstname,'secondname'=>$this->secondname,'reply'=>$this->reply]);
    }
}
