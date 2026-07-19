<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LandingPageEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->from('drsamreen8@gmail.com')
                    ->to('tejalloke17@gmail.com')
                    ->subject('New Enquiry from Landing Page')
                    ->view('emails.landing_page_enquiry')
                    ->with('formData', $this->formData);
    }

}
