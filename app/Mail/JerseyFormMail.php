<?php

namespace App\Mail;

use App\Models\Jersey;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JerseyFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $jersey;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Jersey  $jersey
     * @return void
     */
    public function __construct(Jersey $jersey)
    {
        $this->jersey = $jersey;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.jersey_form_mail')
                    ->subject('New Jersey Order Form Submission');
    }
}
