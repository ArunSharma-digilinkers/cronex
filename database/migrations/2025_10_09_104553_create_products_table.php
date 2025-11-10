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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('model');
            $table->string('battery_type');
            $table->string('capacity_range');
            $table->string('cycle_life');
            $table->string('float_life');
            $table->string('self_discharge');
            $table->string('operational_temperature');
            $table->string('efficency');
            $table->string('construction');
            $table->string('quality_control');
            $table->string('certification');
            $table->string('life_expectancy');
            $table->string('eco_initiative');
            $table->string('image');
            $table->string('key_feature');
            $table->string('application');
            $table->string('brochure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
