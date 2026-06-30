<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class StudentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                  TextEntry::make('nama_siswa'),
                TextEntry::make('nisn'),
                TextEntry::make('kelas'),
                TextEntry::make('sub_kelas'),
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
