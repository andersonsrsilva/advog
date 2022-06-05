<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityTable extends Migration
{
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uf_id')->unsigned();
            $table->integer('ibge_code');
            $table->string('name');

            $table->foreign('uf_id')
            ->references('id')
            ->on('uf')
            ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('city');
    }
}
