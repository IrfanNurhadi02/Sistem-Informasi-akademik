<?php

namespace App\Filament\Resources\StudentGrades\Tables;

// use Filament\Actions\BulkActionGroup;
// use Filament\Actions\DeleteBulkAction;
//use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Filament\Resources\Grades\Pages\CreateGrade;
use App\Filament\Resources\StudentGrades\Pages\ViewStudentGrade;

class StudentGradesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_siswa')
                    ->label('Nama Siswa')
                    ->searchable(),

                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),

                TextColumn::make('kelas')
                    ->label('Kelas')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
    
    Action::make('view')
        ->label('Lihat Nilai')
        ->icon('heroicon-o-eye')
        ->url(fn ($record) => ViewStudentGrade::getUrl([
            'record' => $record->id,
        ])),

    Action::make('input')
        ->label('Input Nilai')
        ->icon('heroicon-o-pencil')
        ->url(fn ($record) => CreateGrade::getUrl()),
                    
            ])
            // ->toolbarActions([
            //     // BulkActionGroup::make([
            //     //     DeleteBulkAction::make(),
            //     // ]),
            // ])
            ;
    }
}
