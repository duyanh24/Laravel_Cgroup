<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumVitaeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_vitae', function (Blueprint $table) {
            $table->increments('cv_id');
            $table->timestamps();
            $table->string('name');
            $table->string('phone');
            $table->string('position');
            $table->string('email');
            $table->string('birthday');
            $table->string('sex');
            $table->string('file_cv');
            $table->string('introduce');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_vitae');
    }
}
