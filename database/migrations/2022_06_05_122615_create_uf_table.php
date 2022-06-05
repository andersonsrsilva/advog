<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUfTable extends Migration
{
    public function up()
    {
        Schema::create('uf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code', 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('uf');
    }
}
