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
        Schema::create('produkmutu', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->text('description');
            $table->string('namatok');
            $table->string('link');
            $table->bigInteger('price');
            $table->integer('stock')->default(0); //udah di hapus
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produkmutu', function (Blueprint $table) {
            // Drop the 'stock' column
            $table->dropColumn('stock');
        });
    }
};
