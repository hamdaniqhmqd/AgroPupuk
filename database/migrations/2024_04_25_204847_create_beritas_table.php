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
        Schema::create('beritas', function (Blueprint $table) {
            $table->bigIncrements('id_berita')->unsigned();
            $table->string('gambar_berita');
            $table->string('judul_berita');
            $table->text('deskripsi_berita');
            $table->text('link_berita');
            $table->unsignedBigInteger('author')->nullable();
            $table->unsignedBigInteger('pengunjung_berita')->default(0);
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
        Schema::table('beritas', function (Blueprint $table) {
            //
        });
    }
};
