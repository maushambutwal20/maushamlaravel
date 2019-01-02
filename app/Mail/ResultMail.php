<?php

namespace App\Mail;

use App\Registerstudent;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResultMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Result';
        $student = Registerstudent::all();
        $all = $student[0]->all();
        return $this->view('back.email',compact('roll'))
            ->subject($subject);
    }
}
