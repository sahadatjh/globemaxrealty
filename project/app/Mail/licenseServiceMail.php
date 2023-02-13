<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class licenseServiceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $licenseService;
    public function __construct( $licenseService )
    {
        $this->licenseService = $licenseService;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');

        return $this->view('website.mail.application')
        ->with('data', $this->applicationData)
        ->attach(asset($this->onlineMemberInormation->licence_img),
            [
                'as' => $this->applicationData['licence_img']->getClientOriginalName(),
                'mime' => $this->applicationData['licence_img']->getClientMimeType(),
            ])

        ->attach(asset($this->onlineMemberInormation->profile_img),
            [
                'as' => $this->applicationData['profile_img']->getClientOriginalName(),
                'mime' => $this->applicationData['profile_img']->getClientMimeType(),
            ]);
    }
}
