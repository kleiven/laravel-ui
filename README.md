[![Latest Version on Packagist](https://img.shields.io/packagist/v/kleiven/laravel-ui.svg?style=flat-square)](https://packagist.org/packages/kleiven/laravel-ui)
[![Total Downloads](https://img.shields.io/packagist/dt/kleiven/laravel-ui.svg?style=flat-square)](https://packagist.org/packages/kleiven/laravel-ui)
[![License](https://img.shields.io/packagist/l/kleiven/laravel-ui?style=flat-square)](https://packagist.org/packages/kleiven/laravel-ui)

# Front end scaffolding for Laravel

This package adds front end scaffolding to your Laravel application.

Once installed on a **fresh** Laravel application you quickly get a basic starting point.  
To get up and running with a Single Page Application (SPA) implementing the [bootstrap Cover template](https://getbootstrap.com/docs/4.4/examples/cover/), just run the following Artisan command:

``` bash
php artisan ui spa-bootstrap-cover
```

Then your Laravel application will be set up with a fully functional SPA using [Vue](https://vuejs.org) and [Vue Router](https://router.vuejs.org/) ready for you to build something wonderful.


## Installation
Use Composer to install this package:

``` bash
composer require kleiven/laravel-ui
```

Now you may scaffold you front end using the Artisan command:
``` bash
php artisan ui spa-bootstrap-cover
```

Also, remember to run `npm install` to install added dependencies such as bootstrap, vue and vue-router.

## Available scaffolds

This package declares preset macros using Laravel's `UiCommand`. Therefore all front end scaffolding may be installed using the `Ui` Artisan command.

Since March 2020 there is a new kid in town and for now there has only been time to make 1 preset, but more will follow. The following table lists all presets available for the current package version.

<table>
<thead>
<tr>
<th>Preset</th><th>Install command</th>
</tr>
</thead>
<tbody>
<tr>
<td>spa-bootstrap-cover</td>
<td><code>php artisan ui spa-bootstrap-cover</code></td>
</tr>
</tbody>
</table>

## Contributing

Hopefully it will be possible to contribute with your presets in the future.

## License

This package is licensed under the [MIT license](LICENSE.md).