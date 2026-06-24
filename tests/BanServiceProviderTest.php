<?php

use JeffersonGoncalves\Filament\Ban\BanServiceProvider;
use Spatie\LaravelPackageTools\Package;

it('can be instantiated', function () {
    $provider = new BanServiceProvider(app());

    expect($provider)->toBeInstanceOf(BanServiceProvider::class);
});

it('has correct package name', function () {
    $provider = new BanServiceProvider(app());

    $package = new Package;
    $provider->configurePackage($package);

    expect($package->name)->toBe('filament-ban');
});
