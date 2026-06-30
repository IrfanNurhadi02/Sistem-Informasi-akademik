<?php

namespace App\Filament\Resources\TeachingAssignments\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TeachingAssignmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('teacher.nama_guru')
                    ->label('Guru'),
                TextEntry::make('subject.nama_mapel')
                    ->label('Mata Pelajaran'),
                TextEntry::make('sub_kelas')
                    ->label('Sub Kelas'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
