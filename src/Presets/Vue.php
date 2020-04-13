<?php

namespace Kleiven\Laravel\Ui\Presets;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Kleiven\Laravel\Ui\Presets\Preset;

class Vue extends Preset
{


    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install($namespace)
    {
        static::ensureComponentDirectoryExists();
        static::ensureRouterDirectoryExists();
        static::updatePackages();
        
        static::copyWebpackConfiguration();
        static::copyComponents();
        static::copyVueRouter();
        static::copyBootstrapping();
        static::copySass();
        static::copyRoutes();
        static::copyControllers($namespace);
        static::copyViews();

        static::removeNodeModules();
    }


    /**
     * Ensure the router directory we need exist.
     *
     * @return void
     */
    protected static function ensureRouterDirectoryExists()
    {
        $filesystem = new Filesystem;

        if (! $filesystem->isDirectory($directory = resource_path('js/router'))) {
            $filesystem->makeDirectory($directory, 0755, true);
        }
    }



    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'resolve-url-loader' => '^2.3.1',
            'sass' => '^1.20.1',
            'sass-loader' => '^8.0.0',
            "bootstrap" => "^4.4.1",
            "jquery" => "^3.5.0",
            "popper.js" => "^1.16.0",
            'vue' => '^2.5.17',
            'vue-router' => '^3.1.6',
            'vue-template-compiler' => '^2.6.10',
        ] + $packages;
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function copyWebpackConfiguration()
    {
        copy(__DIR__.'/stubs/vue/webpack.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Update the example component.
     *
     * @return void
     */
    protected static function copyComponents()
    {
 
        copy(
            __DIR__.'/stubs/vue/js/App.vue',
            resource_path('js/App.vue')
        );

        copy(
            __DIR__.'/stubs/vue/js/components/views/DocumentationView.vue',
            resource_path('js/components/views/DocumentationView.vue')
        );

        copy(
            __DIR__.'/stubs/vue/js/components/views/HomeView.vue',
            resource_path('js/components/views/HomeView.vue')
        );

    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function copyVueRouter()
    {
        copy(__DIR__.'/stubs/vue/js/router/index.js', resource_path('js/router/index.js'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function copyBootstrapping()
    {
        copy(__DIR__.'/stubs/vue/js/app.js', resource_path('js/app.js'));
        copy(__DIR__.'/stubs/js/bootstrap.js', resource_path('js/bootstrap.js'));

    }


    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function copySass()
    {
        copy(__DIR__.'/stubs/sass/_variables.scss', resource_path('sass/_variables.scss'));
        copy(__DIR__.'/stubs/sass/app.scss', resource_path('sass/app.scss'));
        copy(__DIR__.'/stubs/sass/_cover.scss', resource_path('sass/_cover.scss'));

    }


    /**
     * Export the authentication backend.
     *
     * @return void
     */
    protected function copyRoutes()
    {
        copy(
            __DIR__.'/../stubs/migrations/2014_10_12_100000_create_password_resets_table.php',
            base_path('database/migrations/2014_10_12_100000_create_password_resets_table.php')
        );
    }


    /**
     * Compiles and copies the "AppController" stub.
     *
     * @return string
     */
    protected function copyControllers($namespace)
    {
        file_put_contents(
            app_path('Http/Controllers/AppController.php'),
            str_replace(
                '{{namespace}}',
                $namespace,
                file_get_contents(__DIR__.'/vue/stubs/controllers/AppController.stub')
            )
        );
    }

    protected static function copyViews(){
        copy(__DIR__.'/stubs/views/app.blade.php', resource_path('views/app.blade.php'));
    }




}