<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalProceedingAtachedFileTable extends Migration
{
    public function up()
    {
        Schema::create('legal_proceeding_atached_file', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legal_proceeding_id')->unsigned();
            $table->string('name');
            $table->string('extension');
            $table->timestamps();

            $table->foreign('legal_proceeding_id')
                ->references('id')
                ->on('legal_proceeding');
        });
    }

    public function down()
    {
        Schema::dropIfExists('legal_proceeding_atached_file');
    }
}
