<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PropertyContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;
    public function __construct($messageData)
    {
        $this->messageData = $messageData;
    }
    
    public function build()
    {
        return $this->subject(str_replace('_',' ',env("APP_NAME")).' Property Contact Mail')->markdown('front.mail.property-contact-mail')->with('customer_data', $this->messageData);
    }
}
