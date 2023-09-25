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
        Schema::create('promo_code', function (Blueprint $table) {
            $table->id();
            $table->string('promo_code')->nullable();
            $table->string('event')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('code_payyment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_code');
    }
};
