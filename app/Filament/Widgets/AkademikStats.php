<?php

namespace App\Filament\Widgets;
use App\Models\Teacher;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AkademikStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
             Stat::make('Total Guru', Teacher::count())
                ->description('Jumlah guru terdaftar'),

            Stat::make('Total Siswa', Student::count())
                ->description('Jumlah siswa terdaftar'),
        ];
    }
}
