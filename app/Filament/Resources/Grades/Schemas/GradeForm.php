<?php

namespace App\Filament\Resources\Grades\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class GradeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->label('Nama Siswa')
                    ->relationship('student', 'nama_siswa')
                    ->searchable()
                    ->required(),

                    Select::make('teaching_assignment_id')
                    ->label('Mata Pelajaran')
                    ->relationship('teachingAssignment.subject', 'nama_mapel')
                    ->searchable()
                    ->required(),

                    Select::make('grade_type')
                    ->label('Jenis Nilai')
                    ->options([
                        'UH' => 'Ulangan Harian',
                        'UTS' => 'UTS',
                        'UAS' => 'UAS',
                    ])
                    ->required(),

                      TextInput::make('score')
                    ->label('Nilai')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(100),

            ]);
    }
}
