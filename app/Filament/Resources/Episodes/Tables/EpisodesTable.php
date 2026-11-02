<?php

namespace App\Filament\Resources\Episodes\Tables;

use App\Models\Episode;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class EpisodesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('published_at', 'desc')
            ->columns([
                ImageColumn::make('artwork')->disk('public')->label('')->square(),
                TextColumn::make('number')->label('#')->sortable(),
                TextColumn::make('title')->searchable()->wrap()->limit(70),
                TextColumn::make('topics')->badge()->separator(','),
                IconColumn::make('is_featured')->label('Featured')->boolean(),
                IconColumn::make('youtube_id')->label('Video')->boolean()
                    ->state(fn (Episode $record) => filled($record->youtube_id)),
                TextColumn::make('published_at')->date()->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_featured')->label('Featured'),
                Filter::make('missing_topics')
                    ->label('Missing topics')
                    ->query(fn (Builder $query) => $query->whereNull('topics')),
            ])
            ->recordActions([
                Action::make('view')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->url(fn (Episode $record) => route('episodes.show', $record))
                    ->openUrlInNewTab(),
                EditAction::make(),
            ]);
    }
}
