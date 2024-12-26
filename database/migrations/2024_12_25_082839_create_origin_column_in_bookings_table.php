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
            $table->string('origin')->nullable();
            $table->string('religion')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('husband_name')->nullable();
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
