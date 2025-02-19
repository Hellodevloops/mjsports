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
        Schema::table('jerseys', function (Blueprint $table) {
            $table->json('personal_info')->nullable()->after('mobile_number'); // JSON for personal info
            $table->json('jersey_specifications')->nullable()->after('material_choice'); // JSON for jersey specifications
            $table->string('sleeves')->after('jersey_size'); // Half Sleeves or Full Sleeves
        $table->integer('number')->nullable()->after('sleeves'); // Optional jersey number
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('jerseys', function (Blueprint $table) {
        $table->dropColumn(['personal_info', 'jersey_specifications', 'sleeves', 'number']);
    });
}

};
