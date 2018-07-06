# Laravel Blade nl2br

A Laravel Blade directive for converting newline characters to breaks.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sandervanhooft/laravel-blade-nl2br.svg?style=flat-square)](https://packagist.org/packages/sander-van-hooft/laravel-blade-nl2br)
[![Build Status](https://img.shields.io/travis/sandervanhooft/laravel-blade-nl2br/master.svg?style=flat-square)](https://travis-ci.org/sandervanhooft/laravel-blade-nl2br)
<!-- [![SensioLabsInsight](https://img.shields.io/sensiolabs/i/xxxxxxxxx.svg?style=flat-square)](https://insight.sensiolabs.com/projects/xxxxxxxxx) -->
<!-- [![Quality Score](https://img.shields.io/scrutinizer/g/sandervanhooft/laravel-blade-nl2br.svg?style=flat-square)](https://scrutinizer-ci.com/g/sandervanhooft/laravel-blade-nl2br) -->
[![Total Downloads](https://img.shields.io/packagist/dt/sandervanhooft/laravel-blade-nl2br.svg?style=flat-square)](https://packagist.org/packages/sandervanhooft/laravel-blade-nl2br)

## Installation

You can install the package via composer:

```bash
composer require sandervanhooft/laravel-blade-nl2br
```

## Usage

``` php
@nl2br("Hello\n world!")
// Hello<br \> world!
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email info@sandervanhooft.com instead of using the issue tracker.

## Credits

- [Sander van Hooft](https://github.com/sandervanhooft)
- [Appstract](https://github.com/appstract/laravel-blade-directives) for blade directive testing methods
- [All Contributors](../../contributors)

## Never miss a new package release
Subscribe to the newsletter at [sandervanhooft.com](http://www.sandervanhooft.com) to learn about the latest Laravel packages and tricks.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
