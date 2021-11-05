<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $fname;
    public $lname;
    public $email;
    public $msubject;
    public $mmessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fname,$lname,$email,$msubject,$mmessage)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->msubject = $msubject;
        $this->message = $mmessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('Email From' .$this->fname . ' '. $this->lname . 'From Smlesecrets')
            ->view('email.contact');
    }
}
