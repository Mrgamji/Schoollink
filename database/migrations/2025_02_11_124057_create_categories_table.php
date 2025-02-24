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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->enum('name',['tsangaya','islamiyya','private', 'boarding', 'day', 'public']); // Category name, e.g., Primary, Secondary, Tertiary
            $table->text('description')->nullable(); // Optional description of the category
            $table->string('thumbnail')->nullable(); // Optional thumbnail for the category
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
