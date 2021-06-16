# This is my package LaravelHorizonMonitor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jaybizzle/laravel-horizon-monitor.svg?style=flat-square)](https://packagist.org/packages/jaybizzle/laravel-horizon-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/jaybizzle/laravel-horizon-monitor/run-tests?label=tests)](https://github.com/jaybizzle/laravel-horizon-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/jaybizzle/laravel-horizon-monitor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/jaybizzle/laravel-horizon-monitor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jaybizzle/laravel-horizon-monitor.svg?style=flat-square)](https://packagist.org/packages/jaybizzle/laravel-horizon-monitor)

---

## Installation

You can install the package via composer:

```bash
composer require jaybizzle/laravel-horizon-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Jaybizzle\LaravelHorizonMonitor\LaravelHorizonMonitorServiceProvider" --tag="laravel-horizon-monitor-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Jaybizzle\LaravelHorizonMonitor\LaravelHorizonMonitorServiceProvider" --tag="laravel-horizon-monitor-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-horizon-monitor = new Jaybizzle\LaravelHorizonMonitor();
echo $laravel-horizon-monitor->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mark Beech](https://github.com/JayBizzle)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
