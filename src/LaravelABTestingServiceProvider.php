<?php

namespace AbdelhamidErrahmouni\LaravelABTesting;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AbdelhamidErrahmouni\LaravelABTesting\Commands\LaravelABTestingCommand;

class LaravelABTestingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ab-testing')
            ->hasConfigFile()
            ->hasMigration('create_laravel_ab_testing_tables')
            ->hasCommand(LaravelABTestingCommand::class);
    }
}
