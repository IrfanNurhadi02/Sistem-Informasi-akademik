<?php

namespace App\Livewire;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use App\Models\Grade;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class StudentGradeReportTable extends Component implements HasActions, HasSchemas, HasTable
{
    use InteractsWithActions;
    use InteractsWithTable;
    use InteractsWithSchemas;

    public $studentId;

    public function table(Table $table): Table
    {
        return $table
            ->query(Grade::query()
        ->select([
            'teaching_assignment_id',
            DB::raw("MAX(CASE WHEN grade_type = 'UH' THEN score END) as uh"),
            DB::raw("MAX(CASE WHEN grade_type = 'UTS' THEN score END) as uts"),
            DB::raw("MAX(CASE WHEN grade_type = 'UAS' THEN score END) as uas"),
        ])
        ->where('student_id', $this->studentId)
        ->groupBy('teaching_assignment_id'))
            ->columns([
                 TextColumn::make('teachingAssignment.subject.nama_mapel')
        ->label('Mata Pelajaran'),

    TextColumn::make('uh')
        ->label('UH'),

    TextColumn::make('uts')
        ->label('UTS'),

    TextColumn::make('uas')
        ->label('UAS'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.student-grade-report-table');
    }
}
