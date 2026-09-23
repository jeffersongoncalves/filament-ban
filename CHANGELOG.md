# Changelog

All notable changes to `filament-ban` will be documented in this file.

## 3.1.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#26)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/15
* ci: standardize update-changelog workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/14
* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/20
* ci: standardize tests workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/23
* feat(i18n): add translations (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/26

**Full Changelog**: https://github.com/jeffersongoncalves/filament-ban/compare/3.0.3...3.1.0

## 3.0.3 - 2026-09-12

Add dependabot cooldown period (4 days) before dependency updates are proposed.

## 3.0.2 - 2026-09-12

fix: correct filament-hidden class name in README

## 3.0.1 - 2026-06-25

Add en/pt_BR translations and use Heroicon enum for icons (Filament v5).

## 3.0.0 - 2026-06-24

Initial release for Filament v5.

- BanAction, UnbanAction (record actions with optional comment and expiration)
- BanBulkAction, UnbanBulkAction
- BanColumn (boolean status icon)
- BanFilter (ternary banned / not banned)

Requires PHP 8.2+, Laravel 11.28/12/13, Filament v5. Powered by cybercog/laravel-ban.
