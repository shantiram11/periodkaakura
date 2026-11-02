<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('role'),
                Textarea::make('bio')->rows(6)->columnSpanFull(),
                FileUpload::make('photo')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('team'),
            ]);
    }
}
