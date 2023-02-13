<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->longText('service_heading')->nullable();
            $table->longText('service_info')->nullable();
            $table->longText('real_estate_image')->nullable();
            $table->longText('real_estate_short_info')->nullable();
            $table->longText('real_estate')->nullable();
            $table->longText('consultation_image')->nullable();
            $table->longText('consultation_short_info')->nullable();
            $table->longText('consultation')->nullable();
            $table->longText('property_tours_image')->nullable();
            $table->longText('property_tours_short_info')->nullable();
            $table->longText('property_tours')->nullable();
            $table->longText('property_tours_video')->nullable();
            $table->longText('buyer_tips_image')->nullable();
            $table->longText('buyer_tips_short_info')->nullable();
            $table->longText('buyer_tips')->nullable();
            $table->longText('seller_tips_image')->nullable();
            $table->longText('seller_tips_short_info')->nullable();
            $table->longText('seller_tips')->nullable();
            $table->longText('real_estate_staging_image')->nullable();
            $table->longText('real_estate_staging_short_info')->nullable();
            $table->longText('real_estate_staging')->nullable();
            $table->longText('fair_housing_policy_image')->nullable();
            $table->longText('fair_housing_policy_short_info')->nullable();
            $table->longText('fair_housing_policy')->nullable();
            $table->longText('energy_tips_image')->nullable();
            $table->longText('energy_tips_short_info')->nullable();
            $table->longText('energy_tips')->nullable();
            $table->longText('property_management_image')->nullable();
            $table->longText('property_management_short_info')->nullable();
            $table->longText('property_management')->nullable();
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
        Schema::dropIfExists('services');
    }
}
