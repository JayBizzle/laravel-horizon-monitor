<?php

namespace Jaybizzle\LaravelHorizonMonitor\Mail;

use Illuminate\Mail\Mailable;

class HorizonDown extends Mailable
{
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('🚨 Horizon is offline!')
                    ->view('horizon-monitor::horizon-down');
    }
}