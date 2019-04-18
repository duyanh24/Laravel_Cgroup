<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('setting_id');
            $table->timestamps();
            $table->string('email');
            $table->string('hotline');
            $table->string('telegram');
            $table->string('google');
            $table->string('facebook');
            $table->string('maps');
            $table->string('copyright');
            $table->string('phone_hcm');
            $table->string('phone_hn');
            $table->string('address_hcm');
            $table->string('address_hn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
