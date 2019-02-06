<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class institutionRegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $institutionName;
    public function __construct($institutionName)
    {
        $this->institutionName = $institutionName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.institution-register', ['institutionName'=>$this->institutionName])->subject('Institution Register')->from('junaid@gmail1.com');
    }
}
