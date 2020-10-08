<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $chocolate;
    public $action;

    public function __construct($user, $chocolate, $action)
    {
        $this -> user = $user;
        $this -> chocolate = $chocolate;
        $this -> action = $action;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this -> from('marghe.sbadata@mail.it')
                     ->view('mail.chocolate-mail');
    }
}
