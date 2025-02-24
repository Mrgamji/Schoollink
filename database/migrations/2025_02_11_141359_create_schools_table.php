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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('description')->nullable();
            $table->string('motto')->nullable();
            $table->string('type'); // Primary, Secondary, Tertiary
            $table->enum('size',['micro','mini', 'midi', 'maxi']); // Primary, Secondary, Tertiary
            $table->string('address');
            $table->string('lga');
            $table->string('state');
            $table->string('country');
            $table->string('contact_number');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->date('established_date')->nullable();
            $table->date('registration_date')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('registration_document')->nullable();
            $table->integer('student_population')->nullable();
            $table->integer('teacher_population')->nullable();
            $table->string('student_teacher_ratio')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
