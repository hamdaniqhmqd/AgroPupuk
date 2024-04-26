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
            $table->bigInteger('id')->unsigned();
            $table->string('gambar_berita');
            $table->string('nama_berita');
            $table->text('deskripsi_berita');
            $table->text('link_berita');
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->string('pengunjung_berita')->default(0);
            $table->timestamps();

            $table->foreign('id_admin')->references('id')->on('users');

            $table->primary('id_berita');
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
