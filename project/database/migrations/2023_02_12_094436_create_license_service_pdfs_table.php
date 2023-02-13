<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseServicePdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_service_pdfs', function (Blueprint $table) {
            $table->id();
            $table->string('license_name')->nullable();
            $table->string('company_name')->nullable();
            $table->tinyInteger('acting')->nullable()->comment('1 = sellerAs & 2 buyerAs & 3 = dualAgent & 4 = DualAgent_Designated');
            $table->string('relationship')->nullable();
            $table->tinyInteger('dual_agency')->nullable()->comment('1 = Advance Informed & 2 Advance Informed with design');
            $table->string('sales_agent')->nullable();
            $table->string('buyer_name')->nullable();
            $table->string('acknowledge')->nullable();
            $table->tinyInteger('signature_is_buyer')->nullable()->comment('0 for not, 1 for yes');
            $table->tinyInteger('signature_is_seller')->nullable()->comment('0 for not, 1 for yes');
            $table->string('buyer_sign1')->nullable();
            $table->string('buyer_sign2')->nullable();
            $table->string('seller_sign1')->nullable();
            $table->string('seller_sign2')->nullable();
            $table->string('buyer_date')->nullable();
            $table->string('seller_date')->nullable();
            $table->string('sales_person')->nullable();
            $table->string('brokerage_name')->nullable();
            $table->string('consumer_name')->nullable();
            $table->string('consumer_signature')->nullable();
            $table->string('sign_date')->nullable();
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
        Schema::dropIfExists('license_service_pdfs');
    }
}
