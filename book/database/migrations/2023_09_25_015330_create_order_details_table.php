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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('promo_id');
            $table->integer('total_price');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('promo_id')->references('id')->on('promo_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
