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
        Schema::create('weight_ranges', function (Blueprint $table) {
            $table->id();
            $table->integer ('weight_start')->unsigned();
            $table->integer ('weight_end')->unsigned();
            $table->decimal('delivery_price', 10, 2);
            $table->foreignId('region_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weight_ranges');
    }
};
