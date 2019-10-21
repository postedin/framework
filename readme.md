# Laravel 4 Latest PHP Compatibility

[![Build Status](https://travis-ci.org/postedin/laravel-4-php-latest.svg?branch=compat)](https://travis-ci.org/postedin/laravel-4-php-latest)

**NOTE:** this is to make things work in the latest version of PHP. It doesn't mean using PHP specific syntax will work with things like the queue serialization. For this you would most likely need to get the latest version of SuperClosure (https://github.com/jeremeamia/super_closure) working. We override a method to stop an error but nothing else.

## Installation

`composer install postedin/laravel-4-php-latest`

Or change your `laravel/framework` to `postedin/laravel-4-php-latest` in your `composer.json` and update the version.

Update your `bootstrap/start.php` and replace
```php
$framework = $app['path.base'].
                 '/vendor/laravel/framework/src';
```
with
```php
$framework = $app['path.base'].
                 '/vendor/postedin/laravel-4-php-latest/src';
```

**You still need to install php-mcrypt,** using pecl. (https://stackoverflow.com/questions/55678023/how-to-install-mcrypt-on-php-7-3-3-ubuntu)

## Changes

- Postgresql uses time zone on all timestamps in migrations, hardcoded for our use and updated tests, fork and remove those commits if you don't want to do this

## PHP Compatibility

- fixed an error in SuperClosure which must be from a PHP version change (https://github.com/jeremeamia/super_closure)
- fixed broken query builder (E_NOTICE) due to a PHP 7.3 change to the `compact` function (https://www.php.net/compact#refsect1-function.compact-changelog)
- fixed broken tests due to a PHP 7.2 change to `count` function (https://www.php.net/count#refsect1-function.count-changelog)








## Laravel PHP Framework

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
