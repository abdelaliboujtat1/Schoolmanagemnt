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
        Schema::create('personalinfos', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('birthday');
            $table->string('personal_photo');
            $table->string('Identitycarte_photo');
            $table->string('gender');
            $table->string('Identitynumber');
            $table->string('address');
            $table->string('poostal');
            $table->string('phone');
            $table->string('educationallevel');
            $table->string('specialization');
            $table->string('medicalcondition');
            $table->string('medication');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_personalinfo');
    }
};
