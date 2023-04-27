<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Admin;
use Vinkla\Hashids\Facades\Hashids;

class AdminWelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;


    protected $admin;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome To GRCFinCrimeAwards 2021')->view('emails.adminWelcome')->with([
            'id' => Hashids::connection('Admin')->encode($this->admin->id),
            'firstname' => $this->admin->firstname,
            'lastname' => $this->admin->lasstname,
            'email' => $this->admin->email,
        ]);
    }
}
