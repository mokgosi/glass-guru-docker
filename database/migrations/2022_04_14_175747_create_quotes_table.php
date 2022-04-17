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
            $table->string('store_location');
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('vin');
            $table->string('make');
            $table->string('model');
            $table->year('year');
            $table->string('registration');
            $table->date('license_issue_date');
            $table->date('license_expiry_date');
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
