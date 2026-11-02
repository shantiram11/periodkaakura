<?php

namespace App\Filament\Resources\PressMentions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PressMentionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('outlet')->required(),
                TextInput::make('title')->label('Headline')->required(),
                TextInput::make('url')->label('Link')->url()->required()->columnSpanFull(),
                DatePicker::make('published_on'),
                FileUpload::make('image')
                    ->label('Screenshot')
                    ->image()
                    ->disk('public')
                    ->directory('press')
                    ->columnSpanFull(),
            ]);
    }
}
