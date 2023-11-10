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
        Schema::table('category_work', function (Blueprint $table) {
            Schema::rename('work_category', 'category_work');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('category_work', function (Blueprint $table) {
            Schema::rename('category_work', 'work_category');
        });
    }
};
