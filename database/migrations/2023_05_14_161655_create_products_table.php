<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sale_price');
            $table->unsignedBigInteger('unit_of_measure_id');
            $table->unsignedBigInteger('purchase_unit_of_measure_id');
            $table->boolean('can_be_sold');
            $table->boolean('can_be_purchased');
            $table->boolean('can_be_expensed');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('unit_of_measure_id')->references('id')->on('unit_of_measures');
            $table->foreign('purchase_unit_of_measure_id')->references('id')->on('unit_of_measures');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
