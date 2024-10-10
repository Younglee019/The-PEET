<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\User;



class sendemail implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, SerializesModels;

    private $user = [];
    /**
     * Create a new job instance.
     */

    public function __construct($user)
    {
        $this->user = $user;
     //   dd($this->user['email']);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mailData = [
            'name' => $this->user['f_name'],
            'email_verified_at' => route('verification.verify', ['id' => $this->user['id']])
        ];

        Mail::send('varifymail', ['mailData' => $mailData], function ($message) {
            $message->to($this->user['email'])
                    ->subject('Verify Your Email Address');
        });
    }
}
