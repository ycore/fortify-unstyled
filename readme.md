# Completely un-styled authentication blade views for [**FortifyUI**][link-fortify-ui]

<div align="center">
    <img src="https://github.com/ycore/fortify-unstyled/blob/master/stubs/unstyled/resources/svg/fortify-login.svg" width="200">
</div>

## Introduction

[Fortify-unstyled][link-this] provides authentication UI views for [**FortifyUI**][link-fortify-ui], with no styling and only minimum markup. Use it to style your own authentication UI or fork it to create an authentication UI styling package for your frontend library or framework of choice.

[![Latest Version on Packagist][ico-version]][link-packagist]

## Installation

1. To get started, install [Fortify-unstyled][link-this] using Composer.

``` bash
$ composer require ycore/fortify-unstyled
```
This command initializes [**FortifyUI**][link-fortify-ui] and publishes the [Fortify-unstyled][link-this] authentication views and scaffolding.

- [x] Publishes authentication blade views to `resources/views/`
- [x] Appends a `home` route to `routes/web.php`
- [x] Enables the `login` and `register` _[Laravel Fortify][link-fortify]_ features

This package and [**FortifyUI**][link-fortify-ui] both utilize package auto-discovery. There is no need to add the service providers manually.

2. Next, publish the [Fortify-unstyled][link-this] authentication views and scaffolding:

``` bash
$ php artisan fortify-ui:unstyled --new
```

[Fortify-unstyled][link-this] installs a sensible default configuration based on the _[Laravel Fortify][link-fortify]_ recommendations. The `login`, `logout`, `registration` and `reset-passwords` features and routes are enabled by default. If these defaults are sufficient, there is no need for additional configuration.

### Installation options

[Fortify-unstyled][link-this] is designed to be re-installed. Use the `--force` or `--views-only` options to overwrite previously-installed views or scaffolding.

Overwrite all previously installed views and scaffolding
``` bash
$ php artisan fortify-ui:unstyled --force
```
Overwrite all previously installed views only
``` bash
$ php artisan fortify-ui:unstyled --views-only
```

### More configuration options
[**FortifyUI**][link-fortify-ui] also provides more configuration options via the `fortify-ui:publish` command. See the [**FortifyUI** configuration][link-fortify-ui] section for details on publishing additional configuration options.

## How the [**FortifyUI**][link-fortify-ui] `un-styled` views were created.

The [Fortify-unstyled][link-this] views were created by cloning `stubs` from [Fortify-tailwind](https://github.com/ycore/fortify-tailwind), then regexp-stripping the `class=""` attributes from all html tags using vscode find-replace.
```bash
    search: [\n| ]*class="[^"]*?"
```

## Changelog

Please see the [Changelog](changelog.md) for more information on what has changed recently.

## Security

Should you discover any security-related issues, please email y-core@outlook.com instead of using the issue tracker.

## Credits

- [Johan Meyer][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [License file](license.md) for more information.
[ico-version]: https://img.shields.io/packagist/v/ycore/fortify-unstyled.svg?style=flat-square

[link-this]: https://github.com/ycore/fortify-unstyled
[link-fortify-ui]: https://github.com/ycore/fortify-ui
[link-fortify]: https://github.com//laravel/fortify

[link-packagist]: https://packagist.org/packages/ycore/fortify-unstyled
[link-author]: https://github.com/ycore
[link-contributors]: ../../contributors
