<?php

namespace JeffersonGoncalves\Filament\Ban\Actions;

use Cog\Contracts\Ban\Bannable;
use Filament\Actions\BulkAction;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Collection;

class UnbanBulkAction extends BulkAction
{
    public static function getDefaultName(): ?string
    {
        return 'unban';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(__('filament-ban::default.unban.bulk_label'))
            ->icon(Heroicon::OutlinedCheckCircle)
            ->color('success')
            ->requiresConfirmation()
            ->action(function (Collection $records): void {
                $records->each(function ($record): void {
                    if ($record instanceof Bannable && $record->isBanned()) {
                        $record->unban();
                    }
                });
            })
            ->deselectRecordsAfterCompletion()
            ->successNotificationTitle(__('filament-ban::default.unban.success'));
    }
}
