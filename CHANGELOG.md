# Changelog

All notable changes to `filament-ban` will be documented in this file.

## 1.1.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#24)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* ci: standardize update-changelog workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/12
* chore(deps): Bump actions/checkout from 6.1.0 to 7.0.1 in the actions-deps group across 1 directory by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-ban/pull/16
* ci: standardize tests workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/21
* feat(i18n): add translations (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/24

**Full Changelog**: https://github.com/jeffersongoncalves/filament-ban/compare/1.0.3...1.1.0

## 1.0.3 - 2026-09-12

Add dependabot cooldown period (4 days) before dependency updates are proposed.

## 1.0.2 - 2026-09-12

fix: correct filament-hidden class name in README

## 1.0.1 - 2026-06-25

Add en/pt_BR translations (Filament v3).

## 1.0.0 - 2026-06-24

Initial release for Filament v3.

- BanAction, UnbanAction (record actions with optional comment and expiration)
- BanBulkAction, UnbanBulkAction
- BanColumn (boolean status icon, requires explicit name)
- BanFilter (ternary banned / not banned)

Requires PHP 8.1+, Laravel 10/11, Filament v3. Powered by cybercog/laravel-ban.
