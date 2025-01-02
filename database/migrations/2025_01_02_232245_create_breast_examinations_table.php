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
        Schema::create('breast_examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('kulit_kanan')->nullable();
            $table->string('kulit_kanan_desc')->nullable();
            $table->string('aerola_kanan')->nullable();
            $table->string('benjolan_kanan')->nullable();
            $table->string('benjolan_kanan_desc')->nullable();
            $table->string('melekat_kanan')->nullable();
            $table->string('gambar_payudara_kanan')->nullable();
            $table->string('kulit_kiri')->nullable();
            $table->string('kulit_kiri_desc')->nullable();
            $table->string('aerola_kiri')->nullable();
            $table->string('benjolan_kiri')->nullable();
            $table->string('benjolan_kiri_desc')->nullable();
            $table->string('melekat_kiri')->nullable();
            $table->string('gambar_payudara_kiri')->nullable();
            $table->string('sadanis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breast_examinations');
    }
};
