<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('subcategory')->nullable();
            $table->string('product_slug');
            $table->string('property_id')->nullable();
            $table->longText('title');
            $table->string('label')->nullable();
            $table->double('price', 8,2)->nullable();
            $table->string('size')->nullable();
            $table->longText('description')->nullable();
            $table->longText('map_link')->nullable();
            $table->longText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('garage')->nullable();
            $table->string('garage_size')->nullable();
            $table->string('year_built')->nullable();
            $table->string('property_type')->nullable();
            $table->string('property_status')->nullable();
            $table->longText('additional_details')->nullable();
            $table->longText('features')->nullable();
            $table->longText('video')->nullable();
            $table->string('contact_mail')->nullable();
            $table->longText('contact_info')->nullable();
            $table->string('view_priority')->nullable()->default('none');
            $table->string('status')->nullable()->default(0)->comment('(0 => Unpublished, 1 => Published)');
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
        Schema::dropIfExists('products');
    }
}
