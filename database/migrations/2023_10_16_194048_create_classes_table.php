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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('days');
            $table->integer('description');
            $table->integer('duration');
            $table->integer('cost');
            $table->time('start_time');
            $table->time('end_time');
            $table->foreignId('assignedId')->constrained('users', 'id')->nullable();
            $table->foreignId('courseId')->constrained('courses', 'id')->nullable();
            $table->foreignId('subjectId')->constrained('subjects', 'id')->nullable();
            $table->foreignId('roomId')->constrained('rooms', 'id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
