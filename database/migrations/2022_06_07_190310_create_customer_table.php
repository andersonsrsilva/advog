<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('email', 200);
            $table->string('cpf', 11);
            $table->string('cnh', 30)->nullable();
            $table->string('passport', 30)->nullable();
            $table->string('home_phone', 10)->nullable();
            $table->string('mobile_phone', 11);
            $table->string('zip_code', 9);
            $table->string('address', 200);
            $table->integer('number_address')->nullable();
            $table->string('other_address', 200)->nullable();
            $table->string('district_address', 200);
            $table->integer('city_id')->unsigned();
            $table->integer('uf_id')->unsigned();
            $table->timestamps();

            $table->foreign('city_id')
            ->references('id')
            ->on('city');

            $table->foreign('uf_id')
            ->references('id')
            ->on('uf');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
