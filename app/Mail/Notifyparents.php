<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Registerstudent;

/**
 * @property Registerstudent registerstudent
 */
class Notifyparents extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param Registerstudent $registerstudent
     */
    public function __construct(Registerstudent $registerstudent)
    {
        $this->registerstudent=$registerstudent;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
