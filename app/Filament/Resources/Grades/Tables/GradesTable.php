<?php

namespace App\Filament\Resources\Grades\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;

use App\Filament\Resources\Grades\Pages\ViewGrade;
use App\Filament\Resources\Grades\Pages\EditGrade;

class GradesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.nama_siswa')
    ->label('Nama Siswa')
    ->searchable(),

TextColumn::make('student.nisn')
    ->label('NISN')
    ->searchable(),

TextColumn::make('student.kelas')
    ->label('Kelas'),
            ])

            ->recordActions([
                Action::make('view')
                    ->label('Lihat Nilai')
                    ->icon('heroicon-o-eye')
                    ->url(fn ($record) =>
                        ViewGrade::getUrl([
                            'record' => $record->id
                        ])
                    ),

                Action::make('edit')
                    ->label('Input Nilai')
                    ->icon('heroicon-o-pencil')
                    ->url(fn ($record) =>
                        EditGrade::getUrl([
                            'record' => $record->id
                        ])
                    ),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}