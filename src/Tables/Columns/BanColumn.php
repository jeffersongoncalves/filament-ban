<?php

namespace JeffersonGoncalves\Filament\Ban\Tables\Columns;

use Cog\Contracts\Ban\Bannable;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Model;

class BanColumn extends IconColumn
{
    public static function getDefaultName(): ?string
    {
        return 'banned';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(__('filament-ban::default.column.label'))
            ->state(fn (?Model $record): bool => $record instanceof Bannable && $record->isBanned())
            ->boolean()
            ->trueIcon(Heroicon::OutlinedNoSymbol)
            ->falseIcon(Heroicon::OutlinedCheckCircle)
            ->trueColor('danger')
            ->falseColor('success');
    }
}
