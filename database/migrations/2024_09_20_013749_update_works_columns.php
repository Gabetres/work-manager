<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table("works", function (Blueprint $table) {
            $table->dropColumn("total_value");
        });
    }

    public function down(): void
    {
        Schema::table("works", function (Blueprint $table) {
            $table->decimal("total_value", 15, 2);
        });
    }
};
