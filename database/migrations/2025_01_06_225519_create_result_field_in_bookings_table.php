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
        Schema::table('bookings', function (Blueprint $table) {
            // 0 : Pengambilan Sampel
            // 1 : Pengiriman Sampel Ke Laborat
            // 2 : Analisa Sampel
            // 3 : Validasi Hasil Sampel
            // 4 : Informasi Hasil Sampel
            // 5 : Tindak Lanjut
            $table->string('result_form')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
};
