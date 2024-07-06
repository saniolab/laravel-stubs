# Opinionated Laravel stubs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/saniolab/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/saniolab/laravel-stubs)
[![run-tests](https://github.com/saniolab/laravel-stubs/actions/workflows/run-tests.yml/badge.svg)](https://github.com/saniolab/laravel-stubs/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/saniolab/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/saniolab/laravel-stubs)

This repo contains opinionated versions of the Laravel stubs. The most notable changes are:

- migrations don't have a `down` function
- controllers don't extend a base controller
- none of the model attributes are guarded
- use return type hints where possible
- most docblocks have been removed

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-stubs.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-stubs)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Exploring laravel-stubs

In this [video on YouTube](https://www.youtube.com/watch?v=I-y-VSOL93I), Povilas Korop explores our package.

## Installation

You can install the package via composer:

```bash
composer require saniolab/laravel-stubs --dev
```

If you want to keep your stubs up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan saniolab-stub:publish --force"
    ]
}
```

## Usage

You can publish the stubs using this command:

```bash
php artisan saniolab-stub:publish
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security

If you've found a bug regarding security please mail [security@spatie.be](mailto:security@spatie.be) instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
