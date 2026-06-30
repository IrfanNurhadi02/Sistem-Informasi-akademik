<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
        'nama_siswa',
        'nisn',
        'jenis_kelamin',
        'kelas',
        'sub_kelas',
        'no_hp',
        'alamat',
        'foto',
    ];
    public function grades()
{
    return $this->hasMany(Grade::class);
}
}
