<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('occupation');       
            $table->integer('hierarchy_id');
            $table->longText('description');
            $table->integer('country_id');
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('start_month');
            $table->string('start_year');
            $table->string('finish_month')->nullable();
            $table->string('finish_year')->nullable();
            $table->integer('student_id');
            $table->softDeletes();
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
        Schema::dropIfExists('professionals');
    }
}
