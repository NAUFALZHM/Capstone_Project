<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_create_foods_table.php
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('calories');
            $table->float('protein');
            $table->float('carbs');
            $table->float('fat');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
