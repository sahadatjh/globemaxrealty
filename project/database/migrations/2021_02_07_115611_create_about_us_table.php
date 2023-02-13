<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('about_us_image')->nullable();
            $table->longText('heading')->nullable();
            $table->longText('description')->nullable();
            $table->longText('opening_hours')->nullable();
            $table->longText('address')->nullable();
            $table->longText('address_2')->nullable();
            $table->text('buyer_require_title')->nullable();
            $table->longText('buyer_require_desc')->nullable();
            $table->string('number')->nullable();
            $table->string('number_2')->nullable();
            $table->string('number_3')->nullable();
            $table->string('email')->nullable();
            $table->string('email_2')->nullable();
            $table->string('email_3')->nullable();
            $table->longText('property_contact_info')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('whats_app_url')->nullable();
            $table->string('instragram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('dashboard_logo')->nullable();
            $table->string('admin_logo')->nullable();
            $table->string('header_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('favicon_icon')->nullable();
            $table->string('footer_image')->nullable();
            $table->longText('map_embed_link')->nullable();
            $table->longText('map_link')->nullable();
            $table->longText('faq')->nullable();
            $table->longText('privacy_policy')->nullable();
            $table->longText('terms_of_use')->nullable();
            $table->longText('buyer_guide')->nullable();
            $table->longText('seller_guide')->nullable();
            $table->longText('award_recognition')->nullable();
            $table->longText('join_the_team')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
