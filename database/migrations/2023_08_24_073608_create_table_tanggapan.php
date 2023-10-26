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
        Schema::create('table_tanggapan', function (Blueprint $table) {
            $table->integer('id_tanggapan')->autoincrement();
            $table->integer('id_pengaduan');
            $table->date('tanggal_pengaduan');
            $table->text('tanggapan');
            $table->integer('id_petugas',);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('table_tanggapan');
    }
};
