<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required(),
                TextInput::make('youtube_id')
                    ->label('YouTube video ID')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->helperText('The part after watch?v= in the YouTube link.'),
            ]);
    }
}
