<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawsuitActionTable extends Migration
{
    public function up()
    {
        Schema::create('lawsuit_action', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250);
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lawsuit_action');
    }
}
