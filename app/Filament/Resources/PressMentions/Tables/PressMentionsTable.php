<?php

namespace App\Filament\Resources\PressMentions\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PressMentionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort')
            ->columns([
                ImageColumn::make('image')->disk('public'),
                TextColumn::make('outlet')->searchable(),
                TextColumn::make('title')->searchable()->wrap()
                    ->url(fn ($record) => $record->url)->openUrlInNewTab(),
                TextColumn::make('published_on')->date()->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
