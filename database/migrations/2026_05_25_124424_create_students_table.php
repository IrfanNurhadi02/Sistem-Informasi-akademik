<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
             $table->string('nama_siswa');
    $table->string('nisn')->unique();
    $table->string('jenis_kelamin');
    $table->string('kelas');
    $table->string('sub_kelas');
    $table->string('no_hp');
    $table->text('alamat');
    $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
