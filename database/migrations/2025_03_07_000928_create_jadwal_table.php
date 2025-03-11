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
    Schema::create('jadwal', function (Blueprint $table) {
        $table->id();

        // Menggunakan unsignedBigInteger untuk foreign key yang mengacu ke tabel siswa, assesor, dan skema
        $table->unsignedBigInteger('id_siswa');
        $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('cascade');

        $table->unsignedBigInteger('id_assesor');
        $table->foreign('id_assesor')->references('id')->on('assesor')->onDelete('cascade');

        $table->unsignedBigInteger('id_skema');
        $table->foreign('id_skema')->references('id')->on('skema')->onDelete('cascade');

        $table->date('tanggal');
        $table->string('tempat');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
