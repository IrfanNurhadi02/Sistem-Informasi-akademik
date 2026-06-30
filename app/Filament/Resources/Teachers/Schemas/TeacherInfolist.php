<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;

class TeacherInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_guru'),
                TextEntry::make('nip'),
                TextEntry::make('jenis_kelamin'),
                TextEntry::make('no_hp'),
                TextEntry::make('alamat')
                    ->columnSpanFull(),
                ImageEntry::make('foto')
                    ->disk('public')
                    ->imageHeight(50),
                    
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
