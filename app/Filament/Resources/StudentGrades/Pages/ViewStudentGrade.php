<?php

namespace App\Filament\Resources\StudentGrades\Pages;

use App\Filament\Resources\StudentGrades\StudentGradeResource;
use App\Models\Grade;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStudentGrade extends ViewRecord
{
    protected static string $resource = StudentGradeResource::class;

    public array $report = [];
    public function mount(int|string $record): void
    {
        parent::mount($record);

       $grades = Grade::with(['student', 'teachingAssignment.subject'])
            ->where('student_id', $record)
            ->get();
           foreach ($grades as $grade) {
             $subject = $grade->teachingAssignment->subject->nama_mapel;
        if (! isset($this->report[$subject])) {
                $this->report[$subject] = [
                    'UH' => '-',
                    'UTS' => '-',
                    'UAS' => '-',
                ];
    }
    $this->report[$subject][$grade->grade_type] = $grade->score;
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
        ];
    }
}
