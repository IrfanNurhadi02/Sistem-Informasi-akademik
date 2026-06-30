<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'kode_mapel',
        'nama_mapel',
        //'jumlah_guru',
    ];

    public function teachingAssignments()
    {
        return $this->hasMany(TeachingAssignment::class);
    }
}
