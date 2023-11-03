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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();

            $table->string('nickname');
            $table->date('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('photo')->nullable();
            $table->text('biography')->nullable();
            $table->string('nationality')->nullable();
            $table->string('based')->nullable();
            $table->string('phone')->nullable();
            $table->string('business_email')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('slug')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
