<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_guides', function (Blueprint $table) {
            $table->id();
            $table->longText('get_pre_approved')->nullable();
            $table->longText('buying_multi_family')->nullable();
            $table->longText('calculators')->nullable();
            $table->longText('covid_19')->nullable();
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
        Schema::dropIfExists('buyer_guides');
    }
}
