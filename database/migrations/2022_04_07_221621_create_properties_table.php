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
            Schema::create('properties', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('property_title', 100);
                $table->string('property_description');
                $table->string('property_image');
                $table->unsignedInteger('bedrooms');
                $table->unsignedDecimal('bathrooms');
                $table->unsignedInteger('sqaure_feet');
                $table->string('finished_basement', 10);
                $table->unsignedDecimal('prop_tax');
                $table->string('heat_type', 10);
                $table->string('water_heater', 10);
                $table->year('year_built');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
