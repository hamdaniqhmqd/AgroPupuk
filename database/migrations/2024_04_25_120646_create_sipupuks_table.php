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
        Schema::create('sipupuks', function (Blueprint $table) {
                $table->id();
                $table->string('image', 100);
                $table->string('title' ,100);
                $table->text('content');
                $table->unsignedBigInteger('author')->nullable();
                $table->timestamps();

                $table->foreign('author')->references('id')->on('users')->onDelete('set null');
                $table->index('author');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sipupuks');
    }
};
