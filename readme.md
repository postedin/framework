# Laravel 4 Latest PHP Compatibility

You still need to install php-mcrypt using pecl. (https://stackoverflow.com/questions/55678023/how-to-install-mcrypt-on-php-7-3-3-ubuntu)

## Changes

- Postgresql uses time zone on all timestamps, hardcoded for our use and updated tests, fork and remove those commits if you don't want to do this

## PHP Compatibility

- fixed broken query builder (E_NOTICE) due to a PHP 7.3 change to the `compact` function (https://www.php.net/compact#refsect1-function.compact-changelog)
- fixed broken tests due to a PHP 7.2 change to `count` function (https://www.php.net/count#refsect1-function.count-changelog)
- ~~updated classloader dependency (https://github.com/ClassPreloader/ClassPreloader)~~
- ~~updated SuperClosure dependency (https://github.com/jeremeamia/super_closure)~~

## Laravel Framework (Kernel)

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

> **Note:** This repository contains the core code of the Laravel framework. If you want to build an application using Laravel 4, visit the main [Laravel repository](https://github.com/laravel/laravel).

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
