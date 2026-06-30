<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;

use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class TeacherForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_guru')
                    ->required(),
                TextInput::make('nip')
                    ->required(),
                Select::make('jenis_kelamin')
                    ->required()
                    ->options([
                        'laki-laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                    ]),
                TextInput::make('no_hp')
                    ->required(),
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->disk('public')
                    ->directory('teacher-photos')
                    ->image()
                    ->maxSize(1024) // Maksimal ukuran file dalam KB
                    ->columnSpanFull(),
            ]);
    }
}
