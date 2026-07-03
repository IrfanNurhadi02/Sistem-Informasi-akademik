<?php

namespace App\Filament\Resources\StudentGrades\Pages;

use App\Filament\Resources\StudentGrades\StudentGradeResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class StudentGradeReport extends Page
{
    use InteractsWithRecord;

    protected static string $resource = StudentGradeResource::class;

    protected string $view = 'filament.resources.student-grades.pages.student-grade-report';

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }
}
