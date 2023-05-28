# laravel-vue-modules

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](README.md)


| **Laravel** | **laravel-modules** |
|-------------|---------------------|
| 10.0        | ^1.0.0              |


`muhammadanasdevs/laravel-vue-modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 10.

This package is a re-published, re-organised and maintained version of [pingpong/modules](https://github.com/pingpong-labs/modules), which isn't maintained anymore. This package is used in [AsgardCMS](https://asgardcms.com/).

With one big added bonus that the original package didn't have: **tests**.

Find out why you should use this package in the article: [Writing modular applications with laravel-modules](https://nicolaswidart.com/blog/writing-modular-applications-with-laravel-modules).

## Install

To install through Composer, by run the following command:

``` bash
composer require muhammadanasdevs/laravel-vue-modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="Muhammadanasdevs\Modules\LaravelModulesServiceProvider"
```

### Autoloading

By default, the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/",
      "Database\\Factories\\": "database/factories/",
      "Database\\Seeders\\": "database/seeders/"
  }

}
```

**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Documentation

You'll find installation instructions and full documentation on [https://docs.laravelmodules.com/](https://docs.laravelmodules.com/).

## Addition
 I only added vue router:
``` npm install
    npm run dev
    php artisan vue-init
```
and this add into web.php
``` Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');
```
and this add into welcome.blade.php
``` <!DOCTYPE html>
<html>
    <head>
        @vite('resources/css/app.css')
    </head>
<body>
    <div id="app"></div>
    @vite('resources/js/app.js')
</body>
</html>
```
## About Muhammadanasdevs

Muhammadanasdevs is a freelance web developer specialising on the Laravel framework. View all my packages [on my website](https://nwidart.com/), or visit [my website](https://nicolaswidart.com).


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
