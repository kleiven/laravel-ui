<p align="center">kleiven\laravel-ui</p>

<p align="center">
<a href="https://packagist.org/packages/laravel/sanctum"><img src="https://gposer.pugx.or/laravel/sanctum/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/sanctum"><img src="https://poser.pugx.org/laravel/sanctum/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/sanctum"><img src="https://poser.pugx.org/laravel/sanctum/license.svg" alt="License"></a>
</p>

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

## Available scaffolds

This package declares preset macros using Laravel's `UiCommand`. Therefore all front end scaffolding may be installed using the `Ui` Artisan command.

Since March 2020 there has been a new kid in town and for now there is only made 1 preset.

<table>
<thead>
<tr>
<th>Preset</th><th>Install command</th><th>Demopage</th>
</tr>
</thead>
<tbody>
<tr>
<td>spa-bootstrap-cover</td>
<td><code>php artisan ui spa-bootstrap-cover</code></td>
<td><a href="https://eivindkleiven.com">Example page spa-bootstrap-cover</a></td>
</tr>
</tbody>
</table>

## Contributing

Thank you for considering contributing to this package!

## License

This package is licensed under the [MIT license](LICENSE.md).