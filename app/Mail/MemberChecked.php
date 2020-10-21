<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class MemberChecked extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $trainer;
    public $trainee;
    public $user;
    public function __construct($trainer, $trainee)
    {
        //
        $this->trainer = $trainer;
        $this->trainee = $trainee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

    return $this->subject('New assignment from'.$this->trainer->name)->view('emails.member_checked');

    }
}
