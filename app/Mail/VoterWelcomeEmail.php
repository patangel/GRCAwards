<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Voter;


class VoterWelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $voter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Voter $voter)
    {
        $this->voter = $voter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('OTP - GRCFinCrimeAwards 2021')->view('emails.voterWelcome')->with([
            'firstname' => $this->voter->firstname,
            'lastname' => $this->voter->lastname,
            'email' => $this->voter->email,
            'token' => $this->voter->token,
        ]);
    }
}
