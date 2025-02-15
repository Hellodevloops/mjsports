<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JerseyFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $jersey;
    public $pdf;

    public function __construct($jersey, $pdf)
    {
        $this->jersey = $jersey;
        $this->pdf = $pdf;
    }

    public function build()
    {
        return $this->view('emails.jersey_form_mail')
                    ->with(['jersey' => $this->jersey])
                    ->attachData($this->pdf->output(), 'Jersey_Order.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
