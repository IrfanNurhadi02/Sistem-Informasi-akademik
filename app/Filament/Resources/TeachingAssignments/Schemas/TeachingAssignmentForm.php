<?php

namespace App\Filament\Resources\TeachingAssignments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class TeachingAssignmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Select::make('teacher_id')
                    ->label('Guru')
                    ->relationship('teacher', 'nama_guru')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('subject_id')
                    ->label('Mata Pelajaran')
                    ->relationship('subject', 'nama_mapel')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('sub_kelas')
                    ->label('Sub Kelas')
                    ->options([
                        '7.1' => '7.1',
                        '7.2' => '7.2',
                        '7.3' => '7.3',
                        '7.4' => '7.4',
                        '7.5' => '7.5',
                        '7.6' => '7.6',
                        '7.7' => '7.7',
                        '7.8' => '7.8',
                        '7.9' => '7.9',
                        '7.10' => '7.10',

                        '8.1' => '8.1',
                        '8.2' => '8.2',
                        '8.3' => '8.3',
                        '8.4' => '8.4',
                        '8.5' => '8.5',
                        '8.6' => '8.6',
                        '8.7' => '8.7',
                        '8.8' => '8.8',
                        '8.9' => '8.9',
                        '8.10' => '8.10',

                        '9.1' => '9.1',
                        '9.2' => '9.2',
                        '9.3' => '9.3',
                        '9.4' => '9.4',
                        '9.5' => '9.5',
                        '9.6' => '9.6',
                        '9.7' => '9.7',
                        '9.8' => '9.8',
                        '9.9' => '9.9',
                        '9.10' => '9.10',
                    ])
                    ->searchable()
                    ->required(),
            ]);
            
    }
}
