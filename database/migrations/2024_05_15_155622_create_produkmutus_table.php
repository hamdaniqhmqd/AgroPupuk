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
        Schema::create('produkmutus', function (Blueprint $table) {
            $table->id();
            $table -> string ('image');
            $table->string ('title');
            $table->enum('jenis', ['npk', 'phonska', 'urea', 'za']);
            $table->text ('description');
            $table->bigInteger ('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkmutus');
    }
};
