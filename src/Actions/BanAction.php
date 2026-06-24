<?php

namespace JeffersonGoncalves\Filament\Ban\Actions;

use Cog\Contracts\Ban\Bannable;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;

class BanAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'ban';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Ban')
            ->icon('heroicon-o-no-symbol')
            ->color('danger')
            ->requiresConfirmation()
            ->form([
                Textarea::make('comment')
                    ->label('Comment')
                    ->nullable(),
                DateTimePicker::make('expired_at')
                    ->label('Expires at')
                    ->helperText('Leave empty for a permanent ban.')
                    ->seconds(false)
                    ->nullable(),
            ])
            ->visible(fn (?Model $record): bool => $record instanceof Bannable && $record->isNotBanned())
            ->action(function (array $data, Model $record): void {
                if (! $record instanceof Bannable) {
                    return;
                }

                $record->ban([
                    'comment' => $data['comment'] ?? null,
                    'expired_at' => $data['expired_at'] ?? null,
                ]);
            })
            ->successNotificationTitle('Banned');
    }
}
