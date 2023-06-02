<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('serial_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('internal_reference');
            $table->string('serial_number')->unique();
            $table->bigInteger('company_id');
            $table->bigInteger('product_attribute_value_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('product_attribute_value_id')
                ->references('id')
                ->on('product_attribute_values');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('serial_numbers');
    }
};
