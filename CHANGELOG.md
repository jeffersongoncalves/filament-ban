# Changelog

All notable changes to `filament-ban` will be documented in this file.

## 2.0.3 - 2026-09-12

Add dependabot cooldown period (4 days) before dependency updates are proposed.

## 2.0.2 - 2026-09-12

fix: correct filament-hidden class name in README

## 2.0.1 - 2026-06-25

Add en/pt_BR translations and use Heroicon enum for icons (Filament v4).

## 2.0.0 - 2026-06-24

Initial release for Filament v4.

- BanAction, UnbanAction (record actions with optional comment and expiration)
- BanBulkAction, UnbanBulkAction
- BanColumn (boolean status icon)
- BanFilter (ternary banned / not banned)

Requires PHP 8.2+, Laravel 11/12, Filament v4. Powered by cybercog/laravel-ban.
