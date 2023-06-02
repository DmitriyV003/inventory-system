<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('price_rules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('applied_on');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('product_attribute_value_id')->nullable();
            $table->bigInteger('min_quantity')->nullable();
            $table->bigInteger('price')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('applied_on')->references('id')->on('products');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('product_attribute_value_id')->references('id')->on('product_attribute_values');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('price_rules');
    }
};
