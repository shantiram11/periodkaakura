<?php

namespace App\Filament\Resources\Episodes\Pages;

use App\Filament\Resources\Episodes\EpisodeResource;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Artisan;

class ListEpisodes extends ListRecords
{
    protected static string $resource = EpisodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('sync')
                ->label('Sync from feed')
                ->icon('heroicon-o-arrow-path')
                ->action(function () {
                    $failed = Artisan::call('episodes:sync');

                    Notification::make()
                        ->title(trim(Artisan::output()))
                        ->{$failed ? 'danger' : 'success'}()
                        ->send();
                }),
        ];
    }
}
