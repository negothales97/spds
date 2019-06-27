<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->string('email', 191)->unique();
            $table->string('password', 191);
            $table->string('trade', 191);
            $table->string('phone', 191);
            $table->string('cnpj', 191);
            $table->integer('status')->default(0);
            $table->double('mensality');
            $table->string('zip_code', 191);
            $table->string('street', 191);
            $table->string('number', 191);
            $table->string('neighborhood', 191);
            $table->integer('city_id');
            $table->integer('state_id');
            $table->rememberToken();
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
        Schema::drop('companies');
    }
}
