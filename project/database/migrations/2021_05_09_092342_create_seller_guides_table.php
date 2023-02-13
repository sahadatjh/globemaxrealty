<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_guides', function (Blueprint $table) {
            $table->id();
            $table->longText('free_home_valuation')->nullable();
            $table->longText('seller_closing_costs')->nullable();
            $table->longText('local_market_reports')->nullable();
            $table->longText('all_steps_to_selling')->nullable();
            $table->longText('faq')->nullable();
            $table->longText('free_consultation')->nullable();
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
        Schema::dropIfExists('seller_guides');
    }
}
