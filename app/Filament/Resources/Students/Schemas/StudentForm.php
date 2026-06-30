<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Set;
use Filament\Forms\Get;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 TextInput::make('nama_siswa')
                    ->required(),
                TextInput::make('nisn')
                    ->required(),
                Select::make('kelas')
                    ->label('Kelas')
                    ->options([
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                    ])
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn ($state, $set) => $set('sub_kelas', null)),
                
                Select::make('sub_kelas')
                    ->label('Sub Kelas')
                    ->placeholder('Pilih kelas terlebih dahulu')
                    ->required()
                    ->disabled(fn ($get): bool => ! $get('kelas'))
                    ->options(function ($get): array {
                        $kelasUtama = $get('kelas');

                        if (! $kelasUtama) {
                            return [];
                        }

                        $daftarSubKelas = [
                            '7' => [
                                '7.1' => '7.1', '7.2' => '7.2', '7.3' => '7.3', '7.4' => '7.4', '7.5' => '7.5',
                                '7.6' => '7.6', '7.7' => '7.7', '7.8' => '7.8', '7.9' => '7.9', '7.10' => '7.10',
                            ],
                            '8' => [
                                '8.1' => '8.1', '8.2' => '8.2', '8.3' => '8.3', '8.4' => '8.4', '8.5' => '8.5',
                                '8.6' => '8.6', '8.7' => '8.7', '8.8' => '8.8', '8.9' => '8.9', '8.10' => '8.10',
                            ],
                            '9' => [
                                '9.1' => '9.1', '9.2' => '9.2', '9.3' => '9.3', '9.4' => '9.4', '9.5' => '9.5',
                                '9.6' => '9.6', '9.7' => '9.7', '9.8' => '9.8', '9.9' => '9.9', '9.10' => '9.10',
                            ],
                        ];

                        return $daftarSubKelas[$kelasUtama] ?? [];
                    }),
                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
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
                    ->directory('student-photos')
                    ->image()
                    ->maxSize(1024) // Maksimal ukuran file dalam KB
                    ->columnSpanFull(),
            ]);
    }
}
