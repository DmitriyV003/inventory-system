<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_attribute_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('attribute_value_id');
            $table->unsignedBigInteger('cost');
//            $table->unsignedBigInteger('quantity_on_hand');
            $table->string('internal_reference')->unique()->nullable();
            $table->string('bar_code')->unique()->nullable();
            $table->decimal('volume')->nullable();
            $table->decimal('weight')->nullable();
            $table->unsignedBigInteger('extra_price');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('product_id')->references('products')->on('id');
            $table->foreign('attribute_value_id')->references('attribute_values')->on('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_attribute_values');
    }
};
