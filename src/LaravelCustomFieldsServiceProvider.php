<?php

namespace Jennoramcaj\LaravelCustomFields;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jennoramcaj\LaravelCustomFields\Commands\LaravelCustomFieldsCommand;

class LaravelCustomFieldsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-custom-fields')
            ->hasConfigFile('custom-fields')
            ->hasViews()
            ->hasMigration('create_custom_fields_table')
            ->hasMigration('create_custom_fields_values_table');
    }
}
