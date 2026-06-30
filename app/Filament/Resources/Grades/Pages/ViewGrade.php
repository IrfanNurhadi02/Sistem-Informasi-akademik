<?php

namespace App\Filament\Resources\Grades\Pages;

use App\Filament\Resources\Grades\GradeResource;
use App\Models\Grade;
use Filament\Resources\Pages\ViewRecord;

class ViewGrade extends ViewRecord
{
    protected static string $resource = GradeResource::class;

    public function getViewData(): array
    {
        $record = $this->record;

        $grades = Grade::with(['student', 'teachingAssignment.subject'])
            ->where('student_id', $record->student_id)
            ->get()
            ->groupBy(fn ($item) =>
                $item->teachingAssignment->subject->nama_mapel ?? 'Tanpa Mapel'
            );

        return [
            'student' => $record->student,
            'grades' => $grades,
        ];
    }
}