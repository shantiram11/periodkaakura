<?php

namespace App\Filament\Resources\TeamMembers\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeamMembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort')
            ->columns([
                ImageColumn::make('photo')->disk('public')->circular(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('role'),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
