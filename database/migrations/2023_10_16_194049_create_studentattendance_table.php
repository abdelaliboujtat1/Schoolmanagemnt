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
            $table->unsignedBigInteger('classeId')->nullable(); // Define the nullable foreign key
            $table->foreign('classeId')->references('id')->on('classes'); // Define the foreign key relationship
            $table->date('date');
            $table->boolean('first_hour');
            $table->boolean('second_hour');
            $table->boolean('leave');
            $table->string('attstatus');
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
