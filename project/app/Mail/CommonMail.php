<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommonMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;
    public function __construct($messageData)
    {
        $this->messageData = $messageData;
    }

    public function build()
    {
        return $this->subject((isset($this->messageData['mail_label']))?str_replace('_',' ',env("APP_NAME")).' '.ucwords(str_replace('_',' ', $this->messageData['mail_label'])).' Mail':str_replace('_',' ',env("APP_NAME")).' Mail')->markdown('front.mail.common-mail')->with('commonMailData', $this->messageData);
    }
}
