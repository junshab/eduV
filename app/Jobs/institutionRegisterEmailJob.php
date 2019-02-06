<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\institutionRegisterEmail;
use Illuminate\support\Facades\Mail;

class institutionRegisterEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $institutionName;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email,$institutionName)
    {
        $this->email = $email;
        $this->institutionName = $institutionName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new institutionRegisterEmail($this->institutionName));
    }
}
