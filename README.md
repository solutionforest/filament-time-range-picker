# This is my package time-range-slider

[![Latest Version on Packagist](https://img.shields.io/packagist/v/solutionforest/time-range-slider.svg?style=flat-square)](https://packagist.org/packages/solutionforest/time-range-slider)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/solutionforest/time-range-slider/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/solutionforest/time-range-slider/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/solutionforest/time-range-slider/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/solutionforest/time-range-slider/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/solutionforest/time-range-slider.svg?style=flat-square)](https://packagist.org/packages/solutionforest/time-range-slider)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require solutionforest/time-range-slider
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="time-range-slider-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="time-range-slider-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="time-range-slider-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$timeRangeSlider = new SolutionForest\TimeRangeSlider();
echo $timeRangeSlider->echoPhrase('Hello, SolutionForest!');
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

- [kelseylee](https://github.com/solutionforest)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
