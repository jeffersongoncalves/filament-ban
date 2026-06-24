<?php

namespace JeffersonGoncalves\Filament\Ban\Actions;

use Cog\Contracts\Ban\Bannable;
use Filament\Actions\Action;
use Illuminate\Database\Eloquent\Model;

class UnbanAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'unban';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Unban')
            ->icon('heroicon-o-check-circle')
            ->color('success')
            ->requiresConfirmation()
            ->visible(fn (?Model $record): bool => $record instanceof Bannable && $record->isBanned())
            ->action(function (Model $record): void {
                if (! $record instanceof Bannable) {
                    return;
                }

                $record->unban();
            })
            ->successNotificationTitle('Unbanned');
    }
}
