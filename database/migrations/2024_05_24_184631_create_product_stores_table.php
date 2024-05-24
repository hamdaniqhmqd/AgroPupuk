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
        Schema::create('product_stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produkmutu_id')->constrained('produkmutus')->onDelete('cascade');
            $table->string('store_name');
            $table->string('store_link');
            $table->enum('marketplace', ['Tokopedia', 'BliBli', 'Shopee', 'Lazada']);
            $table->bigInteger('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stores');
    }
};
