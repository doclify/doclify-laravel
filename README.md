# doclify/laravel — Doclify Laravel Package

[![Packagist](https://img.shields.io/packagist/v/doclify/laravel.svg?style=for-the-badge)](https://packagist.org/packages/doclify/laravel)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/doclify/laravel.svg?style=for-the-badge)](https://packagist.org/packages/doclify/laravel)
[![Packagist](https://img.shields.io/github/license/doclify/doclify-laravel.svg?style=for-the-badge)](https://packagist.org/packages/doclify/laravel)

> This library provides an easy-to-use integration between the Laravel framework and the Doclify SDK. It requires at least PHP 7.2.

## Setup

Add this package to your application by using [Composer](https://getcomposer.org/) and executing the following command:

``` bash
composer require doclify/laravel
```

Add the service provider to the `providers` array in `config/app.php`:

``` php
'providers' => [
    Doclify\Laravel\DoclifyServiceProvider::class,
],
```

## Configuration

Publish the config file:

``` sh
php artisan vendor:publish --provider="Doclify\Laravel\DoclifyServiceProvider"
```

This will add `doclify.php` to your `/config` folder. Next, add your repository and API token to your `.env` file:

    DOCLIFY_REPOSITORY="your_repository_name"
    DOCLIFY_TOKEN="your_token"

## License

Copyright (c) 2020 Doclify. Code released under the MIT license. See [LICENSE](LICENSE) for further details.
