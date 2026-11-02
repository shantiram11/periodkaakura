<?php

namespace App\Filament\Resources\Episodes\Schemas;

use App\Models\Episode;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EpisodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                Section::make('Website content')
                    ->description('Edited here only. The RSS sync never touches these fields.')
                    ->columnSpan(2)
                    ->schema([
                        TagsInput::make('topics')
                            ->suggestions(Episode::TOPICS),
                        TextInput::make('youtube_id')
                            ->label('YouTube video ID')
                            ->helperText('The part after watch?v= in the YouTube link.'),
                        Textarea::make('summary')
                            ->helperText('Short teaser for cards and search results. Falls back to the show notes.')
                            ->rows(3),
                        Textarea::make('transcript')
                            ->rows(12),
                        Toggle::make('is_featured')
                            ->label('Feature on the homepage'),
                    ]),
                Section::make('From the podcast feed')
                    ->description('Overwritten by the hourly sync.')
                    ->columnSpan(1)
                    ->collapsed()
                    ->schema([
                        TextInput::make('number')->numeric(),
                        TextInput::make('title')->required(),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->helperText('Changing this breaks shared links.'),
                        DateTimePicker::make('published_at'),
                        TextInput::make('duration')->numeric()->suffix('sec'),
                        TextInput::make('audio_url')->url(),
                        TextInput::make('image_url')->url(),
                        TextInput::make('spotify_url')->url(),
                        TextInput::make('guid')->required()->disabled(),
                    ]),
                RichEditor::make('description')
                    ->label('Show notes')
                    ->columnSpanFull(),
            ]);
    }
}
