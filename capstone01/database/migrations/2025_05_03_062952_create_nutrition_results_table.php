<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nutrition_results', function (Blueprint $table) {
            $table->id('result_id');
            $table->float('kebutuhan_kalori_harian')->nullable();
            $table->float('IMT')->nullable();
            $table->text('status_gizi')->nullable();
            $table->date('date')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nutrition_results');
    }
};
