<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
        protected $fillable = [
        'nama_guru',
        'nip',
        'jenis_kelamin',
        'no_hp',
        'alamat',
        'foto',
    ];
        public function teachingAssignments()
        {
            return $this->hasMany(TeachingAssignment::class);
        }

}
