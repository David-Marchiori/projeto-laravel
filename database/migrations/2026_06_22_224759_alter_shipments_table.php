<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('shipments', function (Blueprint $table) {
        $table->dropColumn('origin_street');
        $table->decimal('width', 8, 2);
        $table->decimal('height', 8, 2);
        $table->decimal('length', 8, 2);
    });
}

public function down(): void
{
    Schema::table('shipments', function (Blueprint $table) {
        $table->string('origin_street');
        $table->dropColumn(['width', 'height', 'length']);
    });
}
};
