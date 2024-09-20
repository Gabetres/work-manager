<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->smallInteger("pices");
            $table->decimal("value", 15, 2);
            $table->decimal("total_value", 15, 2);
            $table->date("date");
            $table->foreignId('customers_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
