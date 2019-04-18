<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruit', function (Blueprint $table) {
            $table->increments('recruit_id');
            $table->timestamps();
            $table->string('title');
            $table->string('content');
            $table->string('avatar');
            $table->string('hinh_thuc');
            $table->string('address');
            $table->string('position');
            $table->string('salary');
            $table->string('deadline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruit');
    }
}
