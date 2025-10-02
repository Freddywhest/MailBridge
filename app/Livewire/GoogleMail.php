<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use App\Mail\GenericMail;

class GoogleMail extends Component
{
    use WithFileUploads;

    public $smtp_host, $smtp_port, $smtp_user, $smtp_pass, $smtp_encryption, $from_name, $from_email;
    public $to, $subject, $message, $attachment;

    public function sendMail()
    {
        $this->validate([
            'smtp_host' => 'required|string',
            'smtp_port' => 'required|integer',
            'smtp_user' => 'required|email',
            'smtp_pass' => 'required|string',
            'smtp_encryption' => 'required|string|in:ssl,tls,null',
            'from_email' => 'required|email',
            'from_name' => 'required|string',
            'to' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'attachment' => 'nullable|file|max:2048',
        ]);

        // Override mail config dynamically
        config([
            'mail.mailers.dynamic' => [
                'transport' => 'smtp',
                'host' => $this->smtp_host,
                'port' => $this->smtp_port,
                'encryption' => $this->smtp_encryption !== 'null' ? $this->smtp_encryption : null,
                'username' => $this->smtp_user,
                'password' => $this->smtp_pass,
                'timeout' => null,
                'auth_mode' => null,
            ],
            'mail.default' => 'dynamic',
            'mail.from.address' => $this->from_email,
            'mail.from.name' => $this->from_name,
        ]);

        $attachmentPath = $this->attachment ? $this->attachment->getRealPath() : null;
        $attachmentName = $this->attachment ? $this->attachment->getClientOriginalName() : null;

        Mail::to($this->to)->send(
            new GenericMail($this->subject, $this->message, $attachmentPath, $attachmentName)
        );

        session()->flash('success', 'Mail sent successfully with dynamic SMTP!');
        $this->reset(['to', 'subject', 'message', 'attachment']);
    }

    public function render()
    {
        return view('livewire.google-mail');
    }
}
