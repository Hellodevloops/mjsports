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
        Schema::create('jerseys', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('mobile_number');
            $table->string('jersey_size');
            $table->string('left_chest_logo_image')->nullable();
            $table->string('right_chest_logo_image')->nullable();
            $table->string('left_logo')->nullable(); // Stores the path of the uploaded left chest logo
            $table->string('right_logo')->nullable(); // Stores the path of the uploaded right chest logo
            $table->string('team_name')->nullable();
            $table->string('material_choice');
            $table->string('patterns')->nullable();
            $table->text('special_instructions')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jerseys');
    }
};
