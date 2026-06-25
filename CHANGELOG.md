# Changelog

All notable changes to `filament-ban` will be documented in this file.

## 1.0.1 - 2026-06-25

Add en/pt_BR translations (Filament v3).

## 1.0.0 - 2026-06-24

Initial release for Filament v3.

- BanAction, UnbanAction (record actions with optional comment and expiration)
- BanBulkAction, UnbanBulkAction
- BanColumn (boolean status icon, requires explicit name)
- BanFilter (ternary banned / not banned)

Requires PHP 8.1+, Laravel 10/11, Filament v3. Powered by cybercog/laravel-ban.
