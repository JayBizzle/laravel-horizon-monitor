<?php

namespace Jaybizzle\LaravelHorizonMonitor\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LaravelHorizonMonitorCommand extends Command
{
    public $signature = 'horizon:monitor';

    public $description = 'Monitor the status of Horizon';

    public function handle()
    {
        if (! array_key_exists('horizon', Artisan::all())) {
            return;
        }

        Artisan::call('horizon:status');

        if (Str::contains(Artisan::output(), 'inactive')) {
            $mailable = config('horizon-monitor.email.mailable');
            Mail::to(config('horizon-monitor.email.to'))->send(new $mailable);
        }
    }
}
