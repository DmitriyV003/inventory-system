<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('parent_id');
            $table->string('type');
            $table->integer('company_id');
            $table->boolean('is_return');
            $table->boolean('is_replenish');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('parent_id')->references('id')->on('locations');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
