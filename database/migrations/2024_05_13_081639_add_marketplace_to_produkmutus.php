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
        Schema::table('produkmutus', function (Blueprint $table) {
            $table->enum('Marketplace', ['Tokopedia', 'BliBli', 'Shoppe', 'Lazada'])->after('link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produkmutus', function (Blueprint $table) {
            $table->dropColumn('');
        });
    }
};
