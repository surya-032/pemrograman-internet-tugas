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
        Schema::create('mahasiswas', function (Blueprint $table) {
            
            $table->id()->autoIncrement();
           $table->string('nama');
           $table->string('nim');
           $table->string('password');
           $table->string('email');
           $table->date('tanggal');
           $table->string('gender');
           $table->string('semester');
           $table->string('program_studi');
           $table->string('alamat');
           $table->string('usia');
           $table->string('telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
