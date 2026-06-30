<?php

namespace App\Filament\Resources\Teachers\Pages;

use App\Filament\Resources\Teachers\TeacherResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Infolists\Components\ImageEntry;

class CreateTeacher extends CreateRecord
{
    protected static string $resource = TeacherResource::class;
}
