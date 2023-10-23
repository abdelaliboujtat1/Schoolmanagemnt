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
        Schema::create('studentattendances', function (Blueprint $table) {
            $table->id();            
            $table->foreignId('courseId')->constrained('courses','id')->nullable();

            $table->date('date');
            $table->boolean('first_hour');
            $table->boolean('second_hour');
            $table->boolean('leave');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentattendance');
    }
};
