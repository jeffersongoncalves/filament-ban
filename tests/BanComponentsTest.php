<?php

use JeffersonGoncalves\Filament\Ban\Actions\BanAction;
use JeffersonGoncalves\Filament\Ban\Actions\BanBulkAction;
use JeffersonGoncalves\Filament\Ban\Actions\UnbanAction;
use JeffersonGoncalves\Filament\Ban\Actions\UnbanBulkAction;
use JeffersonGoncalves\Filament\Ban\Tables\Columns\BanColumn;
use JeffersonGoncalves\Filament\Ban\Tables\Filters\BanFilter;

it('builds the ban action with the default name', function () {
    expect(BanAction::make()->getName())->toBe('ban');
});

it('builds the unban action with the default name', function () {
    expect(UnbanAction::make()->getName())->toBe('unban');
});

it('builds the ban bulk action with the default name', function () {
    expect(BanBulkAction::make()->getName())->toBe('ban');
});

it('builds the unban bulk action with the default name', function () {
    expect(UnbanBulkAction::make()->getName())->toBe('unban');
});

it('builds the ban column with the given name', function () {
    expect(BanColumn::make('banned')->getName())->toBe('banned');
});

it('builds the ban filter with the default name', function () {
    expect(BanFilter::make()->getName())->toBe('banned');
});
