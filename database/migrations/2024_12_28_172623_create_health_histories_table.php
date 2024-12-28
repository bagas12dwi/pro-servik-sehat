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
        Schema::create('health_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->string('usia_haid')->nullable();
            $table->string('usia_kawin')->nullable();
            $table->string('usia_hamil')->nullable();
            $table->string('konsumsi_alkohol')->nullable();
            $table->string('hpht')->nullable();
            $table->string('hpht_desc')->nullable();
            $table->string('melahirkan_normal')->nullable()->default(0);
            $table->string('melahirkan_normal_desc')->nullable()->default(0);
            $table->string('melahirkan_caesar')->nullable()->default(0);
            $table->string('melahirkan_caesar_desc')->nullable()->default(0);
            $table->string('keguguran')->nullable()->default(0);
            $table->string('keguguran_desc')->nullable()->default(0);
            $table->string('menyusui')->nullable();
            $table->string('menyusui_desc')->nullable();
            $table->string('kb_lama_tidak_pernah')->nullable()->default(0);
            $table->string('kb_lama_pil')->nullable()->default(0);
            $table->string('kb_lama_pil_desc')->nullable()->default(0);
            $table->string('kb_lama_suntik')->nullable()->default(0);
            $table->string('kb_lama_suntik_desc')->nullable()->default(0);
            $table->string('kb_lama_spiral')->nullable()->default(0);
            $table->string('kb_lama_susuk')->nullable()->default(0);
            $table->string('kb_lama_kondom')->nullable()->default(0);
            $table->string('kb_lama_lainnya')->nullable()->default(0);
            $table->string('kb_lama_lainnya_desc')->nullable()->default(0);
            $table->string('kb_sekarang_tidak_kb')->nullable()->default(0);
            $table->string('kb_sekarang_pil')->nullable()->default(0);
            $table->string('kb_sekarang_pil_desc')->nullable()->default(0);
            $table->string('kb_sekarang_suntik')->nullable()->default(0);
            $table->string('kb_sekarang_suntik_desc')->nullable()->default(0);
            $table->string('kb_sekarang_spiral')->nullable()->default(0);
            $table->string('kb_sekarang_susuk')->nullable()->default(0);
            $table->string('kb_sekarang_kondom')->nullable()->default(0);
            $table->string('kb_sekarang_lainnya')->nullable()->default(0);
            $table->string('kb_sekarang_lainnya_desc')->nullable()->default(0);
            $table->string('pap_smear')->nullable();
            $table->string('test_iva')->nullable();
            $table->string('merokok')->nullable();
            $table->string('merokok_desc')->nullable();
            $table->string('aktivitas')->nullable();
            $table->string('konsumsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_histories');
    }
};
