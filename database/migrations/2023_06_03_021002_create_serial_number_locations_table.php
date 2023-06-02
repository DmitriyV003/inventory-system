<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('serial_number_locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('serial_number_id');
            $table->bigInteger('quantity_on_hand');
            $table->bigInteger('reserved_quantity');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('serial_number_id')->references('id')->on('serial_numbers');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('serial_number_locations');
    }
};
