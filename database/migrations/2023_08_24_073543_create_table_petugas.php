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
        Schema::create('table_petugas', function (Blueprint $table) {
            $table->integer('id_petugas')->autoincrement();
            $table->string('nama_petugas',35);
            $table->string('username',25);
            $table->string('password',32);
            $table->string('telp',13);
            $table->enum('level',['petugas','admin']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('table_petugas');
    }
};
