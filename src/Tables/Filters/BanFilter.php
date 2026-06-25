<?php

namespace JeffersonGoncalves\Filament\Ban\Tables\Filters;

use Filament\Tables\Filters\TernaryFilter;
use Illuminate\Database\Eloquent\Builder;

class BanFilter extends TernaryFilter
{
    public static function getDefaultName(): ?string
    {
        return 'banned';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(__('filament-ban::default.filter.label'))
            ->placeholder(__('filament-ban::default.filter.placeholder'))
            ->trueLabel(__('filament-ban::default.filter.true_label'))
            ->falseLabel(__('filament-ban::default.filter.false_label'))
            ->queries(
                true: fn (Builder $query): Builder => $query->whereNotNull('banned_at'),
                false: fn (Builder $query): Builder => $query->whereNull('banned_at'),
                blank: fn (Builder $query): Builder => $query,
            );
    }
}
