# Changelog

All notable changes to `filament-ban` will be documented in this file.

## 2.0.1 - 2026-06-25

Add en/pt_BR translations and use Heroicon enum for icons (Filament v4).

## 2.0.0 - 2026-06-24

Initial release for Filament v4.

- BanAction, UnbanAction (record actions with optional comment and expiration)
- BanBulkAction, UnbanBulkAction
- BanColumn (boolean status icon)
- BanFilter (ternary banned / not banned)

Requires PHP 8.2+, Laravel 11/12, Filament v4. Powered by cybercog/laravel-ban.
