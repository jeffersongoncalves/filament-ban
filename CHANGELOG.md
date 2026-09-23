# Changelog

All notable changes to `filament-ban` will be documented in this file.

## 2.1.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#25)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* ci: standardize update-changelog workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/13
* chore(deps): Bump actions/checkout from 6.1.0 to 7.0.1 in the actions-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-ban/pull/17
* ci: standardize tests workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/22
* feat(i18n): add translations (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-ban/pull/25

**Full Changelog**: https://github.com/jeffersongoncalves/filament-ban/compare/2.0.3...2.1.0

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
