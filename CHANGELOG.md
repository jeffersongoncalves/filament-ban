# Changelog

All notable changes to `filament-ban` will be documented in this file.

## 3.0.1 - 2026-06-25

Add en/pt_BR translations and use Heroicon enum for icons (Filament v5).

## 3.0.0 - 2026-06-24

Initial release for Filament v5.

- BanAction, UnbanAction (record actions with optional comment and expiration)
- BanBulkAction, UnbanBulkAction
- BanColumn (boolean status icon)
- BanFilter (ternary banned / not banned)

Requires PHP 8.2+, Laravel 11.28/12/13, Filament v5. Powered by cybercog/laravel-ban.
