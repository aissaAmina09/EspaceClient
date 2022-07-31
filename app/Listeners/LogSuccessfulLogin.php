<?php

namespace App\Listeners;
use App\LoginActivity;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Carbon\Carbon;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //
     //return   $userIp = \Illuminate\Support\Facades\Request::ip();
        LoginActivity::create([
        'user_id'       =>  $event->user->id,
      
        'user_agent'    =>  \Illuminate\Support\Facades\Request::header('User-Agent'),
        'ip_address'    =>  \Illuminate\Support\Facades\Request::ip(),
        'created_at'    =>Carbon::now(),
        'updated_at'    =>Carbon::now(),
    ]);
    }
}
