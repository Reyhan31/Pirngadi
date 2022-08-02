<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('partModelNo')->nullable();
            $table->string('partNo')->nullable();
            $table->string('modelNo')->nullable();
            $table->string('UNSPSC')->nullable();
            $table->string('contractorType')->nullable();
            $table->string('brandName')->nullable();
            $table->string('vacuumAir')->nullable();
            $table->string('rollSlideFixed')->nullable();
            $table->string('primaryVoltage')->nullable();
            $table->string('amps')->nullable();
            $table->string('controlVoltage')->nullable();
            $table->string('desc')->nullable();
            $table->string('additionalKeywords')->nullable();
            $table->string('price')->nullable();
            $table->string('shippingWeight')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
