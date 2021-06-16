<?php

namespace Jaybizzle\LaravelHorizonMonitor;

use Illuminate\Console\Scheduling\Schedule;
use Jaybizzle\LaravelHorizonMonitor\Commands\LaravelHorizonMonitorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelHorizonMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-horizon-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(LaravelHorizonMonitorCommand::class);
    }

    public function packageBooted()
    {
        $this->callAfterResolving(Schedule::class, function (Schedule $schedule) {
            $schedule->command('horizon:monitor')->everyTenMinutes();
        });
    }
}
