<div class="filament-hidden">

![Filament Ban](https://raw.githubusercontent.com/jeffersongoncalves/filament-ban/1.x/art/jeffersongoncalves-filament-ban.png)

</div>

# Filament Ban

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-ban.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-ban)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-ban/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-ban/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-ban.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-ban)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-ban.svg?style=flat-square)](LICENSE.md)

Ban and unban any Eloquent model directly from your Filament panel. This package wraps [cybercog/laravel-ban](https://github.com/cybercog/laravel-ban) and ships ready-to-use **actions**, **bulk actions**, an **icon column** and a **status filter** for your Filament resources and tables. Inspired by [cybercog/laravel-nova-ban](https://github.com/cybercog/laravel-nova-ban).

## Version Compatibility

| Filament | Laravel        | PHP    | Branch | Version |
|----------|----------------|--------|--------|---------|
| v3       | 10 / 11        | 8.1+   | `1.x`  | `^1.0`  |
| v4       | 11 / 12        | 8.2+   | `2.x`  | `^2.0`  |
| v5       | 11.28 / 12 / 13| 8.2+   | `3.x`  | `^3.0`  |

All tags use plain SemVer **without** the `v` prefix (e.g. `3.0.0`).

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-ban
```

Publish and run the `cybercog/laravel-ban` migration (creates the `bans` table):

```bash
php artisan vendor:publish --provider="Cog\Laravel\Ban\Providers\BanServiceProvider" --tag="migrations"
php artisan migrate
```

Then add a nullable `banned_at` timestamp column to each bannable model's table:

```php
Schema::table('users', function (Blueprint $table) {
    $table->timestamp('banned_at')->nullable();
});
```

## Preparing your model

Make any Eloquent model bannable by implementing the contract and using the trait:

```php
use Cog\Contracts\Ban\Bannable as BannableContract;
use Cog\Laravel\Ban\Traits\Bannable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements BannableContract
{
    use Bannable;
}
```

## Usage

### Actions

Add ban / unban buttons to a resource table row. Each action shows only when relevant
(`Ban` when the record is not banned, `Unban` when it is). `BanAction` opens a modal where
you can set an optional comment and an optional expiration date.

```php
use JeffersonGoncalves\Filament\Ban\Actions\BanAction;
use JeffersonGoncalves\Filament\Ban\Actions\UnbanAction;

public function table(Table $table): Table
{
    return $table
        ->recordActions([
            BanAction::make(),
            UnbanAction::make(),
        ]);
}
```

### Bulk actions

```php
use JeffersonGoncalves\Filament\Ban\Actions\BanBulkAction;
use JeffersonGoncalves\Filament\Ban\Actions\UnbanBulkAction;

$table->toolbarActions([
    BanBulkAction::make(),
    UnbanBulkAction::make(),
]);
```

### Column

Display the current ban status as a boolean icon:

```php
use JeffersonGoncalves\Filament\Ban\Tables\Columns\BanColumn;

$table->columns([
    BanColumn::make('banned'),
]);
```

### Filter

Filter records by ban status (uses the `onlyBanned` / `withoutBanned` scopes):

```php
use JeffersonGoncalves\Filament\Ban\Tables\Filters\BanFilter;

$table->filters([
    BanFilter::make(),
]);
```

## Development

```bash
# Run static analysis
composer analyse

# Run tests
composer test

# Format code
composer format
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [Anton Komarev](https://github.com/antonkomarev) — author of [cybercog/laravel-ban](https://github.com/cybercog/laravel-ban)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
