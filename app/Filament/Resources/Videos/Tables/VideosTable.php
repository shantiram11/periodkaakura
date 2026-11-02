<?php

namespace App\Filament\Resources\Videos\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VideosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort')
            ->columns([
                ImageColumn::make('thumbnail')
                    ->state(fn ($record) => "https://i.ytimg.com/vi/{$record->youtube_id}/mqdefault.jpg"),
                TextColumn::make('title')->searchable()->wrap(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
