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
        Schema::create('ginekologi_examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('vulva')->nullable();
            $table->string('vulva_desc')->nullable();
            $table->string('vagina')->nullable();
            $table->string('vagina_desc')->nullable();
            $table->string('serviks')->nullable();
            $table->string('ssk')->nullable();
            $table->string('pap_smear')->nullable();
            $table->string('hasil')->nullable();
            $table->string('hasil_desc')->nullable();
            $table->string('ims')->nullable();
            $table->string('rujuk')->nullable();
            $table->string('rujuk_desc')->nullable();
            $table->string('bimanual')->nullable();
            $table->string('gambar_ssk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ginekologi_examinations');
    }
};
