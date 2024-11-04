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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false);
            $table->string('email', 100)->nullable(false)->unique();
            $table->string('address', 200)->nullable(false);
            $table->string('phone', 20)->nullable(false);
            $table->integer('star')->nullable(false)->default(0);
            $table->timestamp('check_in_time')->nullable(false)->useCurrent();
            $table->timestamp('checkout_time')->nullable(false)->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
