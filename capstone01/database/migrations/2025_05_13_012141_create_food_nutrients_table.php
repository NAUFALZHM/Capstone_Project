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
        Schema::create('food_nutrients', function (Blueprint $table) {
            $table->id(); // auto increment
            $table->unsignedBigInteger('fdc_id');
            $table->unsignedBigInteger('nutrient_id');
            $table->float('amount')->nullable();
            $table->string('unit_name')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_nutrients');
    }
};
