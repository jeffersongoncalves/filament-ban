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

        $this->label('Banned')
            ->placeholder('All')
            ->trueLabel('Only banned')
            ->falseLabel('Without banned')
            ->queries(
                true: fn (Builder $query): Builder => $query->whereNotNull('banned_at'),
                false: fn (Builder $query): Builder => $query->whereNull('banned_at'),
                blank: fn (Builder $query): Builder => $query,
            );
    }
}
