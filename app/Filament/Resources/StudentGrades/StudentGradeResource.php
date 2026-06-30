<?php

namespace App\Filament\Resources\StudentGrades;

// use App\Filament\Resources\StudentGrades\Pages\CreateStudentGrade;
// use App\Filament\Resources\StudentGrades\Pages\EditStudentGrade;
use App\Filament\Resources\StudentGrades\Pages\ListStudentGrades;
//use App\Filament\Resources\StudentGrades\Schemas\StudentGradeForm;
use App\Filament\Resources\StudentGrades\Tables\StudentGradesTable;
//use App\Models\StudentGrade;

use App\Models\Student;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use App\Filament\Resources\StudentGrades\Pages\ViewStudentGrade;
//use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StudentGradeResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // public static function form(Schema $schema): Schema
    // {
    //     return StudentGradeForm::configure($schema);
    // }
protected static ?string $navigationLabel = 'Nilai';

protected static string|UnitEnum|null $navigationGroup = 'Laporan Siswa';
//protected static bool $shouldRegisterNavigation = false;
    public static function table(Table $table): Table
    {
        return StudentGradesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
             'index' => ListStudentGrades::route('/'),
        'view'  => ViewStudentGrade::route('/{record}'),
           // 'index' => ListStudentGrades::route('/'),
            // 'create' => CreateStudentGrade::route('/create'),
            // 'edit' => EditStudentGrade::route('/{record}/edit'),
        ];
    }
}
