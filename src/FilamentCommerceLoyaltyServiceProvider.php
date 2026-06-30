<?php

namespace JeffersonGoncalves\FilamentCommerce\Loyalty;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceLoyaltyServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-loyalty';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
