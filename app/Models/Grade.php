<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Iluminate\Database\Eloquent\softDeletes;

class Grade extends Model
{
    protected $fillable = [
        'student_id',
        'teaching_assignment_id',
        'grade_type',
        'score',
    ];

    // RELASI KE STUDENT
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // RELASI KE TEACHING ASSIGNMENT
    public function teachingAssignment()
    {
        return $this->belongsTo(TeachingAssignment::class);
    }
}
