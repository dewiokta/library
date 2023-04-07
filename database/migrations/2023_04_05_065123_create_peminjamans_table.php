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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('tgl_pinjam');
            $table->string('tgl_kembali');
            $table->unsignedBigInteger('buku_id');
            $table->foreign('buku_id')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('petugas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('anggota_id');
            $table->foreign('anggota_id')->references('id')->on('anggotas')->onDelete('cascade')->onUpdate('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamans');
    }
};
