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
        Schema::create('identity_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->string('status_nikah_klien')->nullable();
            $table->string('status_nikah_klien_desc')->nullable();
            $table->string('status_nikah_suami')->nullable();
            $table->string('status_nikah_suami_desc')->nullable();
            $table->string('pendidikan_klien')->nullable();
            $table->string('pendidikan_klien_desc')->nullable();
            $table->string('pekerjaan_klien')->nullable();
            $table->string('pekerjaan_klien_desc')->nullable();
            $table->string('pekerjaan_suami')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identity_histories');
    }
};
