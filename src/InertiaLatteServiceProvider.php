<?php

namespace Evitenic\InertiaLatte;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Evitenic\InertiaLatte\Commands\InertiaLatteCommand;

class InertiaLatteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('inertia-latte')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_inertia_latte_table')
            ->hasCommand(InertiaLatteCommand::class);
    }
}
