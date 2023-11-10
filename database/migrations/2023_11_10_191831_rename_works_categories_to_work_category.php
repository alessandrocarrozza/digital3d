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
        Schema::table('work_category', function (Blueprint $table) {
            Schema::rename('works_categories', 'work_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work_category', function (Blueprint $table) {
            Schema::rename('work_category', 'works_categories');
        });
    }
};
