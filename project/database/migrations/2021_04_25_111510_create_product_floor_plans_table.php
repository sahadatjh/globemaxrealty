<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFloorPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_floor_plans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->string('floor_title');
            $table->longText('description');
            $table->double('price', 8,2)->nullable();
            $table->string('image')->nullable();
            $table->longText('info')->nullable();
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
        Schema::dropIfExists('product_floor_plans');
    }
}
