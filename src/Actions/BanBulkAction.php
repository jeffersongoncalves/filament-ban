<?php

namespace JeffersonGoncalves\Filament\Ban\Actions;

use Cog\Contracts\Ban\Bannable;
use Filament\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;

class BanBulkAction extends BulkAction
{
    public static function getDefaultName(): ?string
    {
        return 'ban';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Ban selected')
            ->icon('heroicon-o-no-symbol')
            ->color('danger')
            ->requiresConfirmation()
            ->action(function (Collection $records): void {
                $records->each(function ($record): void {
                    if ($record instanceof Bannable && $record->isNotBanned()) {
                        $record->ban();
                    }
                });
            })
            ->deselectRecordsAfterCompletion()
            ->successNotificationTitle('Banned');
    }
}
