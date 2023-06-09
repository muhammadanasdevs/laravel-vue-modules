# laravel-vue-modules

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](README.md)
![GitHub all releases](https://img.shields.io/github/downloads/muhammadanasdevs/laravel-vue-modules/total?color=green&style=plastic)

| **Laravel** | **laravel-modules** |
|-------------|---------------------|
| 10.0        | ^1.0.0              |


`muhammadanasdevs/laravel-vue-modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 10.



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
    npm install vue vue-router vue-axios --save
    npm i @vitejs/plugin-vue
    npm install vuex --save
    php artisan vue-init
```
add this to web.php
``` 
Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');
```
Next, add below script to welcome.blade.php
``` 
<!DOCTYPE html>
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
Finally, add this to your vite.config.js
```
import vue from "@vitejs/plugin-vue";

```
```
plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

```
## About Muhammadanasdevs

Muhammadanasdevs is a freelance web developer specialising on the Laravel framework. View all my packages [on my website](#), or visit my [LinkedIn](https://www.linkedin.com/in/muhammad-anas-76158717b).


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
