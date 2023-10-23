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
        Schema::create('students', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('personalId')->constrained('personalinfos','id')->nullable();
            $table->boolean('bus_service');
            $table->boolean('is_postponed');
            $table->boolean('postpone_reason');
            $table->boolean('postpone_coures');            
            $table->foreignId('courseId')->constrained('courses', 'id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
