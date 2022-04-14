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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('cost');
            $table->string('store_name');
            $table->string('store_phone');
            $table->string('store_address');
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('client_email')->nullable();
            $table->string('vihicle_vin');
            $table->string('vihicle_make');
            $table->string('vihicle_manufacturer');
            $table->year('vihicle_year');
            $table->string('vihicle_registration');
            $table->date('vihicle_license_issue_date');
            $table->date('vihicle_license_expiry_date');
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
        Schema::dropIfExists('quotes');
    }
};
