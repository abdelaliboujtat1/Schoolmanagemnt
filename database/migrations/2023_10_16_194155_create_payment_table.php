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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->date('registrationdate');
            $table->date('discount');
            $table->foreignId('paysId')->constrained('pays', 'id')->nullable();
            $table->foreignId('studentId')->constrained('students', 'id')->nullable();
            $table->foreignId('courseId')->constrained('courses', 'id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
