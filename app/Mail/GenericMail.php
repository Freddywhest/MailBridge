<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GenericMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectText;
    public $bodyText;
    public $attachmentPath;
    public $attachmentName;

    public function __construct($subjectText, $bodyText, $attachmentPath = null, $attachmentName = null)
    {
        $this->subjectText   = $subjectText;
        $this->bodyText      = $bodyText;
        $this->attachmentPath = $attachmentPath;
        $this->attachmentName = $attachmentName;
    }

    public function build()
    {
        $mail = $this->subject($this->subjectText)
            ->view('emails.google')  // HTML template
            ->with([
                'bodyText' => $this->bodyText,
            ]);

        if ($this->attachmentPath) {
            $mail->attach($this->attachmentPath, [
                'as'   => $this->attachmentName ?? basename($this->attachmentPath),
            ]);
        }

        return $mail;
    }
}
