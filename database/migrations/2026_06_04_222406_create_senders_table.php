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
        Schema::create('senders', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('tax_document');
            $table->string('email');
            $table->string('phone');
            $table->string('zip_code');
            $table->string('street_number');
            $table->string('street');
            $table->string('complement') ->nullable();
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senders');
    }
};
